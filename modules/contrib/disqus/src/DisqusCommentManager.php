<?php

/**
 * @file
 * Contains \Drupal\disqus\DisqusCommentManager.
 */

namespace Drupal\disqus;

use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Url;

/**
 * Disqus comment manager contains common functions to manage disqus_comment fields.
 */
class DisqusCommentManager implements DisqusCommentManagerInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The entity field manager service.
   *
   * @var \Drupal\Core\Entity\EntityFieldManagerInterface
   */
  protected $entityFieldManager;

  /**
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs the DisqusCommentManager object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   * @param \Drupal\Core\Entity\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager service.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   A module handler.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EntityFieldManagerInterface $entity_field_manager, AccountInterface $current_user, ModuleHandlerInterface $module_handler) {
    $this->entityTypeManager = $entity_type_manager;
    $this->entityFieldManager = $entity_field_manager;
    $this->currentUser = $current_user;
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public function getFields($entity_type_id) {
    $entity_type = $this->entityTypeManager->getDefinition($entity_type_id);
    if (!$entity_type->isSubclassOf('\Drupal\Core\Entity\ContentEntityInterface')) {
      return [];
    }

    $map = $this->getAllFields();
    return isset($map[$entity_type_id]) ? $map[$entity_type_id] : [];
  }

  /**
   * {@inheritdoc}
   */
  public function getAllFields() {
    $map = $this->entityFieldManager->getFieldMap();
    // Build a list of disqus comment fields only.
    $disqus_comment_fields = [];
    foreach ($map as $entity_type => $data) {
      foreach ($data as $field_name => $field_info) {
        if ($field_info['type'] == 'disqus_comment') {
          $disqus_comment_fields[$entity_type][$field_name] = $field_info;
        }
      }
    }
    return $disqus_comment_fields;
  }

  /**
   * {@inheritdoc}
   */
  public function ssoSettings() {

    $disqus['sso'] = [
      'name' => \Drupal::config('system.site')->get('name'),
      // The login window must be closed once the user logs in.
      'url' => Url::fromRoute('user.login', [], ['query' => ['destination' => 'disqus/closewindow'], 'absolute' => TRUE])->toString(),
      // The logout link must redirect back to the original page.
      'logout' => Url::fromRoute('user.logout', [], ['query' => ['destination' => Url::fromRoute('<current>')], 'absolute' => TRUE])->toString(),
      'width' => 800,
      'height' => 600,
    ];

    $managed_logo = \Drupal::config('disqus.settings')->get('advanced.sso.disqus_logo');
    $use_site_logo = \Drupal::config('disqus.settings')->get('advanced.sso.disqus_use_site_logo');
    if (!$use_site_logo && !empty($managed_logo)) {
      $disqus['sso']['button'] = file_load($managed_logo)->url();
    }
    elseif ($logo = theme_get_setting('logo')) {
      $disqus['sso']['button'] = $logo['url'];
    }
    else {
      $disqus['sso']['button'] = Url::fromUri('base://core/misc/druplicon.png', ['absolute' => TRUE])->toString();
    }
    if ($favicon = theme_get_setting('favicon')) {
      $disqus['sso']['icon'] = $favicon['url'];
    }

    // Stick the authentication requirements and data in the settings.
    $disqus['api_key'] = \Drupal::config('disqus.settings')->get('advanced.disqus_publickey');
    $disqus['remote_auth_s3'] = $this->ssoKeyEncode($this->ssoUserData());

    return $disqus;
  }

  /**
   * Assembles the full private key for use in SSO authentication.
   *
   * @param array $data
   *
   * @return string
   */
  protected function ssoKeyEncode($data) {
    // Encode the data to be sent off to Disqus.
    $message = base64_encode(json_encode($data));
    $timestamp = time();
    $hmac = hash_hmac('sha1', "$message $timestamp", \Drupal::config('disqus.settings')->get('advanced.disqus_secretkey'));

    return "$message $hmac $timestamp";
  }

  /**
   * Assembles user-specific data used by Disqus SSO.
   *
   * @return array
   */
  protected function ssoUserData() {
    $account = $this->currentUser;
    $data = [];
    if (!$account->isAnonymous()) {
      $data['id'] = $account->id();
      $data['username'] = $account->getAccountName();
      $data['email'] = $account->getEmail();
      $data['url'] = Url::fromRoute('entity.user.canonical', ['user' => $account->id()], ['absolute' => TRUE])->toString();

      // Load the user's avatar.
      $user_picture_default = \Drupal::config('field.instance.user.user.user_picture')->get('settings.default_image');

      $user = user_load($account->id());
      if (isset($user->user_picture->target_id) && !empty($user->user_picture->target_id) && $file = file_load($user->user_picture->target_id)) {
        $file_uri = $file->getFileUri();
        $data['avatar'] = !empty($file_uri) ? $file_uri : NULL;
      }
      elseif (!empty($user_picture_default['fid']) && $file = file_load($user_picture_default['fid'])) {
        $file_uri = $file->getFileUri();
        $data['avatar'] = !empty($file_uri) ? $file_uri : NULL;
      }
      if (isset($data['avatar'])) {
        $data['avatar'] = file_create_url($data['avatar']);
      }
    }
    $this->moduleHandler->alter('disqus_user_data', $data);

    return $data;
  }

}
