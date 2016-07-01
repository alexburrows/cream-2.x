<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Field\FieldFormatter\DisqusFormatter.
 */

namespace Drupal\disqus\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a default disqus comment formatter.
 *
 * @FieldFormatter(
 *   id = "disqus_comment",
 *   label = @Translation("Disqus comment"),
 *   field_types = {
 *     "disqus_comment"
 *   }
 * )
 */
class DisqusFormatter extends FormatterBase implements ContainerFactoryPluginInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * Constructs a new DisqusFormatter.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, AccountInterface $current_user) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, array());
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
      $configuration['label'],
      $configuration['view_mode'],
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    // As the Field API only applies the "field default value" to newly created
    // entities, we'll apply the default value for existing entities.
    if ($items->count() == 0) {
      $field_default_value = $items->getFieldDefinition()->getDefaultValue($items->getEntity());
      $items->status = $field_default_value[0]['status'];
    }

    if ($items->status == 1 && $this->currentUser->hasPermission('view disqus comments')) {
      $element[] = [
        '#type' => 'disqus',
        '#url' => $items->getEntity()->toUrl('canonical', ['absolute' => TRUE])->toString(),
        '#title' => (string) $items->getEntity()->label(),
        '#identifier' => $items->identifier ?: "{$items->getEntity()->getEntityTypeId()}/{$items->getEntity()->id()}",
      ];
    }

    return $element;
  }
}
