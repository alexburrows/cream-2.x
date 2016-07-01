<?php

namespace Drupal\commerce_price\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'commerce_price' field type.
 *
 * @FieldType(
 *   id = "commerce_price",
 *   label = @Translation("Price"),
 *   description = @Translation("Stores a decimal amount and a three letter currency code."),
 *   default_widget = "commerce_price_default",
 *   default_formatter = "commerce_price_default",
 * )
 */
class Price extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['amount'] = DataDefinition::create('string')
      ->setLabel(t('Amount'))
      ->setRequired(FALSE);

    $properties['currency_code'] = DataDefinition::create('string')
      ->setLabel(t('Currency code'))
      ->setRequired(FALSE);

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'amount' => [
          'description' => 'The price amount.',
          'type' => 'numeric',
          'precision' => 19,
          'scale' => 6,
        ],
        'currency_code' => [
          'description' => 'The currency code for the price.',
          'type' => 'varchar',
          'length' => 3,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConstraints() {
    $manager = \Drupal::typedDataManager()->getValidationConstraintManager();
    $constraints = parent::getConstraints();
    $constraints[] = $manager->create('ComplexData', [
      'amount' => [
        'Regex' => [
          'pattern' => '/^[+-]?((\d+(\.\d*)?)|(\.\d+))$/i',
        ],
      ],
    ]);

    return $constraints;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    return empty($this->currency_code);
  }

}
