<?php

namespace Drupal\commerce_product\Tests;

use Drupal\commerce_product\Entity\ProductVariationType;

/**
 * Tests the product variation title generation.
 *
 * @group commerce
 */
class ProductVariationTitleGenerationTest extends ProductTestBase {

  /**
   * The variation type to test against.
   *
   * @var \Drupal\commerce_product\Entity\ProductVariationTypeInterface $variationType
   */
  protected $variationType;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->variationType = $this->createEntity('commerce_product_variation_type', [
      'id' => 'test_default',
      'label' => 'Test Default',
      'lineItemType' => 'product_variation',
    ]);
  }

  /**
   * Test the variation type setting.
   */
  public function testTitleGenerationSetting() {
    /** @var \Drupal\Core\Field\BaseFieldDefinition[] $field_definitions */
    $this->assertFalse($this->variationType->shouldGenerateTitle());
    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('commerce_product_variation', $this->variationType->id());
    $this->assertTrue($field_definitions['title']->isRequired());

    // Enable generation.
    $this->variationType->setGenerateTitle(TRUE);
    $this->variationType->save();
    /** @var \Drupal\commerce_product\Entity\ProductVariationTypeInterface $variation_type */
    $variation_type = ProductVariationType::load($this->variationType->id());
    $this->assertTrue($variation_type->shouldGenerateTitle());

    /** @var \Drupal\Core\Field\BaseFieldDefinition[] $field_definitions */
    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('commerce_product_variation', $this->variationType->id());
    $this->assertFalse($field_definitions['title']->isRequired());
  }

  /**
   * Test the title generation.
   */
  public function testTitleGeneration() {
    /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $variation */
    $variation = $this->createEntity('commerce_product_variation', [
      'type' => 'test_default',
      'sku' => strtolower($this->randomMachineName()),
    ]);
    /** @var \Drupal\commerce_product\Entity\ProductInterface $product */
    $product = $this->createEntity('commerce_product', [
      'type' => 'default',
      'title' => 'My product',
      'variations' => [$variation],
    ]);
    $this->assertFalse($variation->getTitle());

    $this->variationType->setGenerateTitle(TRUE);
    $this->variationType->save();

    /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $variation */
    $variation = $this->createEntity('commerce_product_variation', [
      'type' => 'test_default',
      'sku' => strtolower($this->randomMachineName()),
    ]);
    /** @var \Drupal\commerce_product\Entity\ProductInterface $product */
    $product = $this->createEntity('commerce_product', [
      'type' => 'default',
      'title' => 'My second product',
      'variations' => [$variation],
    ]);
    $this->assertEqual($variation->getTitle(), $product->getTitle());

    // @todo Create attributes, then retest title generation.
  }

}
