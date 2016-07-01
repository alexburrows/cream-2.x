<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Unit\RulesActionBaseTest.
 */

namespace Drupal\Tests\rules\Unit;

use Drupal\Core\StringTranslation\TranslationWrapper;
use Drupal\rules\Core\RulesActionBase;

/**
 * @coversDefaultClass \Drupal\rules\Core\RulesActionBase
 * @group rules
 */
class RulesActionBaseTest extends RulesUnitTestBase {

  /**
   * Tests that a missing label throwa an exception.
   *
   * @expectedException \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   *
   * @covers ::summary
   */
  public function testSummaryThrowingException() {
    $rules_action_base = $this->getMockForAbstractClass(
      RulesActionBase::class,
      [[], '', '']
    );
    $rules_action_base->summary();
  }

  /**
   * Tests that the summary is being parsed from the label annotation.
   *
   * @covers ::summary
   */
  public function testSummaryParsingTheLabelAnnotation() {
    $rules_action_base = $this->getMockForAbstractClass(
      RulesActionBase::class,
      [[], '', ['label' => 'something']]
    );
    $this->assertEquals('something', $rules_action_base->summary());
  }

  /**
   * Tests that a translation wrapper label is correctly parsed.
   *
   * @covers ::summary
   */
  public function testTranslatedLabel() {
    $translation_wrapper = $this->prophesize(TranslationWrapper::class);
    $translation_wrapper->__toString()->willReturn('something');
    $rules_action_base = $this->getMockForAbstractClass(
      RulesActionBase::class,
      [[], '', ['label' => $translation_wrapper->reveal()]]
    );
    $this->assertEquals('something', $rules_action_base->summary());
  }

}
