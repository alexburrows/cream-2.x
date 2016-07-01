<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Condition\EntityIsNewTest.
 */

namespace Drupal\Tests\rules\Integration\Condition;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Tests\rules\Integration\RulesEntityIntegrationTestBase;

/**
 * @coversDefaultClass \Drupal\rules\Plugin\Condition\EntityIsNew
 * @group rules_conditions
 */
class EntityIsNewTest extends RulesEntityIntegrationTestBase {

  /**
   * The condition to be tested.
   *
   * @var \Drupal\rules\Core\RulesConditionInterface
   */
  protected $condition;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $this->condition = $this->conditionManager->createInstance('rules_entity_is_new');
  }

  /**
   * Tests evaluating the condition.
   *
   * @covers ::evaluate
   */
  public function testConditionEvaluation() {
    $entity = $this->prophesizeEntity(EntityInterface::class);
    $entity->isNew()->willReturn(TRUE)->shouldBeCalledTimes(1);

    // Add the test node to our context as the evaluated entity.
    $this->condition->setContextValue('entity', $entity->reveal());
    $this->assertTrue($this->condition->evaluate());
  }

}
