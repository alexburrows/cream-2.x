<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Condition\UserIsBlockedTest.
 */

namespace Drupal\Tests\rules\Integration\Condition;

use Drupal\Tests\rules\Integration\RulesEntityIntegrationTestBase;
use Drupal\user\UserInterface;

/**
 * @coversDefaultClass \Drupal\rules\Plugin\Condition\UserIsBlocked
 * @group rules_conditions
 */
class UserIsBlockedTest extends RulesEntityIntegrationTestBase {

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

    $this->enableModule('user');
    $this->condition = $this->conditionManager->createInstance('rules_user_is_blocked');
  }

  /**
   * Tests evaluating the condition.
   *
   * @covers ::evaluate
   */
  public function testConditionEvaluation() {
    $blocked_user = $this->prophesizeEntity(UserInterface::class);
    $blocked_user->isBlocked()->willReturn(TRUE)->shouldbeCalledTimes(1);

    // Set the user context value.
    $this->condition->setContextValue('user', $blocked_user->reveal());

    $this->assertTrue($this->condition->evaluate());

    $active_user = $this->prophesizeEntity(UserInterface::class);
    $active_user->isBlocked()->willReturn(FALSE)->shouldbeCalledTimes(1);

    // Set the user context value.
    $this->condition->setContextValue('user', $active_user->reveal());

    $this->assertFalse($this->condition->evaluate());;
  }

}
