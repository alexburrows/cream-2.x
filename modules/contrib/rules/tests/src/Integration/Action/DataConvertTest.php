<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Action\DataConvertTest.
 */

namespace Drupal\Tests\rules\Integration\Action;

use Drupal\Tests\rules\Integration\RulesIntegrationTestBase;

/**
 * @coversDefaultClass \Drupal\rules\Plugin\RulesAction\DataConvert
 * @group rules_actions
 */
class DataConvertTest extends RulesIntegrationTestBase {

  /**
   * The action to be tested.
   *
   * @var \Drupal\rules\Core\RulesActionInterface
   */
  protected $action;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Test the conversion and rounding to integer.
   *
   * @covers ::execute
   */
  public function testConvertToInteger() {
    $value = 1.5;

    // Test the conversion to integer.
    $converted = $this->executeAction($value, 'integer');
    $this->assertInternalType('integer', $converted);

    // Test the conversion to integer and floor down.
    $converted = $this->executeAction($value, 'integer', 'down');
    $this->assertInternalType('integer', $converted);
    $this->assertEquals(1, $converted);

    // Test the conversion to integer and ceil up.
    $converted = $this->executeAction($value, 'integer', 'up');
    $this->assertInternalType('integer', $converted);
    $this->assertEquals(2, $converted);

    // Test the conversion to integer and round.
    $converted = $this->executeAction($value, 'integer', 'round');
    $this->assertInternalType('integer', $converted);
    $this->assertEquals(2, $converted);

    $converted = $this->executeAction('+123', 'integer');
    $this->assertInternalType('integer', $converted);
    $this->assertEquals(123, $converted);
  }

  /**
   * Test the conversion to float.
   *
   * @covers ::execute
   */
  public function testConvertToFloat() {
    $value = '1.5';

    $converted = $this->executeAction($value, 'float');
    $this->assertInternalType('float', $converted);
    $this->assertEquals(1.5, $converted);

    $converted = $this->executeAction('+1.5', 'float');
    $this->assertInternalType('float', $converted);
    $this->assertEquals(1.5, $converted);
  }

  /**
   * Test the conversion to text.
   *
   * @covers ::execute
   */
  public function testConvertToString() {
    // Test the conversion to test/string.
    $value = 1.5;

    $converted = $this->executeAction($value, 'string');
    $this->assertInternalType('string', $converted);
    $this->assertEquals('1.5', $converted);
  }

  /**
   * Test the behavior if nonsense context values is set.
   *
   * @covers ::execute
   *
   * @expectedException \InvalidArgumentException
   */
  public function testInvalidValueException() {
    $this->executeAction(['some-array'], 'integer');
  }

  /**
   * Test the behavior if rounding behavior is used with non integers.
   *
   * @covers ::execute
   *
   * @expectedException \InvalidArgumentException
   */
  public function testInvalidRoundingBehavior() {
    $converted = $this->executeAction('some', 'decimal', 'down');
    $this->assertInternalType('float', $converted);
  }

  /**
   * Test the behavior if nonsense rounding_behaviors is set.
   *
   * @covers ::execute
   *
   * @expectedException \InvalidArgumentException
   */
  public function testInvalidRoundingBehaviorException() {
    $value = 5.5;
    $rounding_behavior = 'invalid rounding';
    $this->executeAction($value, 'integer', $rounding_behavior);
  }

  /**
   * Test the behavior if nonsense target_type is set.
   *
   * @covers ::execute
   *
   * @expectedException \InvalidArgumentException
   */
  public function testInvalidTargetTypeException() {
    $value = 5.5;
    $target_type = 'invalid type';
    $this->executeAction($value, $target_type);
  }

  /**
   * Shortcut method to execute the convert action and to avoid duplicate code.
   *
   * @param mixed $value
   *   The value to be converted.
   * @param string $target_type
   *   The target type $value should be converted to.
   * @param null|string $rounding_behavior
   *   Definition for the rounding direction.
   *
   * @return mixed
   *   The raw conversion result as a scalar value.
   */
  protected function executeAction($value, $target_type, $rounding_behavior = NULL) {

    $action = $this->actionManager->createInstance('rules_data_convert');

    $action->setContextValue('value', $value);
    $action->setContextValue('target_type', $target_type);

    if (!empty($rounding_behavior)) {
      $action->setContextValue('rounding_behavior', $rounding_behavior);
    }

    $action->execute();
    $result = $action->getProvidedContext('conversion_result');
    return $result->getContextValue();
  }

}
