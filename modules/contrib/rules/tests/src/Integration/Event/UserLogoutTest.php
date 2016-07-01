<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Event\UserLogoutTest.
 */

namespace Drupal\Tests\rules\Integration\Event;

/**
 * Checks that the event "rules_user_logout" is correctly defined.
 *
 * @group rules_events
 */
class UserLogoutTest extends EventTestBase {

  /**
   * Tests the event metadata.
   */
  public function testUserLogoutEvent() {
    $event = $this->eventManager->createInstance('rules_user_logout');
    $user_context_definition = $event->getContextDefinition('account');
    $this->assertSame('entity:user', $user_context_definition->getDataType());
    $this->assertSame('Logged out user', $user_context_definition->getLabel());
  }

}
