<?php

/**
 * @file
 * Contains \Drupal\disqus\Form\DisqusSettingsForm.
 */

namespace Drupal\disqus\Form;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\file\FileUsage\FileUsageInterface;
use Drupal\Core\Form\FormStateInterface;

class DisqusSettingsForm extends ConfigFormBase {

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * A database backend file usage overridable.
   *
   * @var \Drupal\file\FileUsage\FileUsageInterface
   */
  protected $fileUsage;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a \Drupal\disqus\DisqusSettingsForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \Drupal\file\FileUsage\FileUsageInterface
   *   The file usage overridable.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface
   *   The entity type manager.
   */
  public function __construct(ConfigFactoryInterface $config_factory, ModuleHandlerInterface $module_handler, FileUsageInterface $file_usage, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($config_factory);
    $this->moduleHandler = $module_handler;
    $this->fileUsage = $file_usage;
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('module_handler'),
      $container->get('file.usage'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'disqus_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['disqus.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $disqus_config = $this->config('disqus.settings');

    $form['disqus_domain'] = [
      '#type' => 'textfield',
      '#title' => t('Shortname'),
      '#description' => $this->t('The website shortname that you registered Disqus with. If you registered http://example.disqus.com, you would enter "example" here.'),
      '#default_value' => $disqus_config->get('disqus_domain'),
    ];

    $form['settings'] = [
      '#type' => 'vertical_tabs',
      '#attached' => ['library' => ['disqus/disqus.settings']],
      '#weight' => 50,
    ];

    // Behavior settings.
    $form['behavior'] = [
      '#type' => 'details',
      '#title' => $this->t('Behavior'),
      '#group' => 'settings',
    ];
    $form['behavior']['disqus_localization'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Localization support'),
      '#description' => $this->t("When enabled, overrides the language set by Disqus with the language provided by the site."),
      '#default_value' => $disqus_config->get('behavior.disqus_localization'),
    ];
    $form['behavior']['disqus_inherit_login'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Inherit User Credentials'),
      '#description' => $this->t("When enabled and a user is logged in, the Disqus 'Post as Guest' login form will be pre-filled with the user's name and email address."),
      '#default_value' => $disqus_config->get('behavior.disqus_inherit_login'),
    ];
    $form['behavior']['disqus_disable_mobile'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Disable mobile optimized version'),
      '#description' => $this->t(
        'When enabled, uses the <a href=":url">disqus_disable_mobile</a> flag to tell Disqus service to never use the mobile optimized version of Disqus.',
        [':url' => 'http://docs.disqus.com/help/2/']
      ),
      '#default_value' => $disqus_config->get('behavior.disqus_disable_mobile'),
    ];
    $form['behavior']['disqus_track_newcomment_ga'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Track new comments in Google Analytics'),
      '#description' => $this->t(
        'When enabled, sends tracking information to Google Analytics. This will work only if you have installed the <a href=":url">google_analytics</a> module.',
        [':url' => 'https://www.drupal.org/project/google_analytics']
      ),
      '#default_value' => $disqus_config->get('behavior.disqus_track_newcomment_ga'),
    ];

    // Advanced settings.
    $form['advanced'] = [
      '#type' => 'details',
      '#title' => $this->t('Advanced'),
      '#group' => 'settings',
      '#description' => $this->t('Use these settings to configure the more advanced uses of Disqus. You can find more information about these in the <a href=":applications">Applications</a> section of Disqus. To enable some of these features, you will require a <a href=":addons">Disqus Add-on Package</a>.',
        [
          ':applications' => 'http://disqus.com/api/applications/',
          ':addons' => 'http://disqus.com/addons/',
        ]
      ),
    ];
    $form['advanced']['disqus_useraccesstoken'] = [
      '#type' => 'textfield',
      '#title' => $this->t('User Access Token'),
      '#default_value' => $disqus_config->get('advanced.disqus_useraccesstoken'),
    ];
    $form['advanced']['disqus_publickey'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Public Key'),
      '#default_value' => $disqus_config->get('advanced.disqus_publickey'),
    ];
    $form['advanced']['disqus_secretkey'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Secret Key'),
      '#default_value' => $disqus_config->get('advanced.disqus_secretkey'),
    ];
    $form['advanced']['api'] = [
      '#weight' => 4,
      '#type' => 'fieldset',
      '#title' => $this->t('Disqus API Settings'),
      '#description' => $this->t('These setting pertain to the official Disqus PHP API. You will need to install the <a href=":composer-manager">Composer Manager module</a> and run the composer-manager\'s install command to download the api files and enable api functionality. Check the <a href=":disqus">Disqus module</a> project page for more information.',
        [
          ':composer-manager' => 'https://www.drupal.org/project/composer_manager',
          ':disqus' => 'https://www.drupal.org/project/disqus',
        ]
      ),
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
    ];

    // API integration settings.
    if (class_exists('DisqusAPI')) {
      $form['advanced']['api']['disqus_api_update'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Update Threads'),
        '#description' => $this->t('Update node titles and links via the disqus api when saving. (Requires your user access token.)'),
        '#default_value' => $disqus_config->get('advanced.api.disqus_api_update'),
        '#states' => [
          'enabled' => [
            'input[name="disqus_useraccesstoken"]' => ['empty' => FALSE],
          ],
        ],
      ];
      $form['advanced']['api']['disqus_api_delete'] = [
        '#type' => 'select',
        '#title' => $this->t('Close/Remove Threads'),
        '#description' => $this->t('Action to take when deleting a node. (Requires your user access token.)'),
        '#default_value' => $disqus_config->get('advanced.api.disqus_api_delete'),
        '#options' => [
          DISQUS_API_NO_ACTION => $this->t('No Action'),
          DISQUS_API_CLOSE => $this->t('Close Thread'),
          DISQUS_API_REMOVE => $this->t('Remove Thread'),
        ],
        '#states' => [
          'enabled' => [
            'input[name="disqus_useraccesstoken"]' => ['empty' => FALSE],
          ],
        ],
      ];
    }

    // Single Sign-on settings.
    $form['advanced']['sso'] = [
      '#weight' => 5,
      '#type' => 'fieldset',
      '#title' => $this->t('Single Sign-on'),
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
      '#states' => [
        'visible' => [
          'input[name="disqus_publickey"]' => ['empty' => FALSE],
          'input[name="disqus_secretkey"]' => ['empty' => FALSE],
        ],
      ],
    ];
    $form['advanced']['sso']['disqus_sso'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Use Single Sign-On'),
      '#description' => $this->t(
        'Provide <a href=":sso">Single Sign-On</a> access to your site.',
        [
          ':sso' => 'http://disqus.com/api/sso/',
        ]
      ),
      '#default_value' => $disqus_config->get('advanced.sso.disqus_sso'),
    ];
    $form['advanced']['sso']['disqus_use_site_logo'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Use Site Logo'),
      '#description' => $this->t('Pass the site logo to Disqus for use as SSO login button.'),
      '#default_value' => $disqus_config->get('advanced.sso.disqus_use_site_logo'),
      '#states' => [
        'disabled' => [
          'input[name="disqus_sso"]' => ['checked' => FALSE],
        ],
      ],
    ];
    $form['advanced']['sso']['disqus_logo'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('Custom Logo'),
      '#upload_location' => 'public://images',
      '#default_value' => [$disqus_config->get('advanced.sso.disqus_logo')],
      '#upload_validators' => [
        'file_validate_extensions' => ['gif png jpg jpeg'],
        // Disqus recommends the login button resolution as (143x32)
        // https://help.disqus.com/customer/portal/articles/236206-integrating-single-sign-on
        'file_validate_image_resolution' => ['143x32'],
      ],
      '#states' => [
        'disabled' => [
          'input[name="disqus_sso"]' => ['checked' => FALSE],
        ],
        'visible' => [
          'input[name="disqus_use_site_logo"]' => ['checked' => FALSE],
        ],
      ],
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('disqus.settings');
    $config
      ->set('disqus_domain', $form_state->getValue('disqus_domain'))
      ->set('behavior.disqus_localization', $form_state->getValue('disqus_localization'))
      ->set('behavior.disqus_inherit_login', $form_state->getValue('disqus_inherit_login'))
      ->set('behavior.disqus_disable_mobile', $form_state->getValue('disqus_disable_mobile'))
      ->set('behavior.disqus_track_newcomment_ga', $form_state->getValue('disqus_track_newcomment_ga'))
      ->set('advanced.disqus_useraccesstoken', $form_state->getValue('disqus_useraccesstoken'))
      ->set('advanced.disqus_publickey', $form_state->getValue('disqus_publickey'))
      ->set('advanced.disqus_secretkey', $form_state->getValue('disqus_secretkey'))
      ->set('advanced.sso.disqus_sso', $form_state->getValue('disqus_sso'))
      ->set('advanced.sso.disqus_use_site_logo', $form_state->getValue('disqus_use_site_logo'))
      ->save();

    if($form_state->hasValue('disqus_api_update')) {
      $config->set('advanced.api.disqus_api_update', $form_state->getValue('disqus_api_update'))->save();
    }

    if($form_state->hasValue('disqus_api_delete')) {
      $config->set('advanced.api.disqus_api_delete', $form_state->getValue('disqus_api_delete'))->save();
    }

    $old_logo = $config->get('advanced.sso.disqus_logo');
    $new_logo = (!$form_state->isValueEmpty('disqus_logo')) ? $form_state->getValue(array('disqus_logo', 0)) : '';

    // Ignore if the file hasn't changed.
    if ($new_logo != $old_logo) {
      // Remove the old file and usage if previously set.
      if (!empty($old_logo)) {
        $file = $this->entityTypeManager->getStorage('file')->load($old_logo);
        $this->fileUsage->delete($file, 'disqus', 'disqus');
      }
      // Update the new file and usage.
      if (!empty($new_logo)) {
        $file = $this->entityTypeManager->getStorage('file')->load($new_logo);
        $this->fileUsage->add($file, 'disqus', 'disqus', 1);
      }
    }
    $config->set('advanced.sso.disqus_logo', $new_logo)->save();

    parent::submitForm($form, $form_state);
  }

}
