<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Field\FieldWidget\DisqusWidget.
 */

namespace Drupal\disqus\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the Disqus comments widget.
 *
 * @FieldWidget(
 *   id = "disqus_comment",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "disqus_comment"
 *   }
 * )
 */
class DisqusWidget extends WidgetBase implements ContainerFactoryPluginInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * {@inheritdoc}
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, AccountInterface $current_user) {
   parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, array());
    $this->currentUser = $current_user;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['status'] = [
      '#type' => 'checkbox',
      '#title' => t('Disqus Comments'),
      '#description' => t('Users can post comments using <a href=":disqus">Disqus</a>.', [':disqus' => 'http://disqus.com']),
      '#default_value' => isset($items->status) ? $items->status : TRUE,
      '#access' => $this->currentUser->hasPermission('toggle disqus comments'),
    ];

    $element['identifier'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Disqus identifier'),
      '#description' => $this->t('Unique identifier of the Disqus thread. "[entity-type]/[entity-id]" is used if not set. Changing this might cause comments to disappear. Use extreme caution!'),
      '#default_value' => isset($items->identifier) ? $items->identifier : '',
      '#access' => $this->currentUser->hasPermission('administer disqus'),
    ];

    // If the advanced settings tabs-set is available (normally rendered in the
    // second column on wide-resolutions), place the field as a details element
    // in this tab-set.
    if (isset($form['advanced'])) {
      $element += array(
        '#type' => 'details',
        '#group' => 'advanced',
      );
    }

    return $element;
 }

}
