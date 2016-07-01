<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Field\FieldType\DisqusItem.
 */

namespace Drupal\disqus\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the Disqus comments field type.
 *
 * @FieldType(
 *   id = "disqus_comment",
 *   label = @Translation("Disqus comment"),
 *   description = @Translation("Disqus comment widget"),
 *   default_widget = "disqus_comment",
 *   default_formatter = "disqus_comment"
 * )
 */
class DisqusItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'status' => [
          'type' => 'int',
          'not null' => TRUE,
          'default' => 1,
        ],
        'identifier' => [
          'type' => 'varchar',
          'default' => '',
          'length' => 255,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['status'] = DataDefinition::create('integer')
      ->setLabel(new TranslatableMarkup('Disqus status value'));
    $properties['identifier'] = DataDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Disqus thread identifier'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    return $this->get('status')->getValue() === '';
  }

}
