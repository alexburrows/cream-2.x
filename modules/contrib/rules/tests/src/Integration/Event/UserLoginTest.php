<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Event\UserLoginTest.
 */

namespace Drupal\Tests\rules\Integration\Event;

/**
 * Checks that the event "rules_user_login" is correctly defined.
 *
 * @group rules_events
 */
class UserLoginTest extends EventTestBase {

  /**
   * Tests the event metadata.
   */
  public function testUserLoginEvent() {
    $event = $this->eventManager->createInstance('rules_user_login');
    $user_context_definition = $event->getContextDefinition('account');
    $this->assertSame('entity:user', $user_context_definition->getDataType());
    $this->assertSame('Logged in user', $user_context_definition->getLabel());
  }

}
