<?php

/**
 * @file
 * Test for the State Demo form example.
 */

namespace Drupal\fapi_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Ensure that the fapi_example forms work properly.
 *
 * @see Drupal\simpletest\WebTestBase
 *
 * SimpleTest uses group annotations to help you organize your tests.
 *
 * @group fapi_example
 *
 * @ingroup fapi_example
 */
class ContainerDemoTest extends WebTestBase {

  /**
   * Our module dependencies.
   *
   * @var array List of test dependencies.
   */
  static public $modules = array('fapi_example');

  /**
   * The installation profile to use with this test.
   *
   * @var string Installation profile required for test.
   */
  protected $profile = 'minimal';

  /**
   * Test example forms provided by fapi_example.
   */
  public function testContainerDemoForm() {

    // Test for a link to the simple_form example on the form_example page.
    $this->drupalGet('examples/fapi_example');
    $this->assertLinkByHref('examples/fapi_example/container_demo');

    // Verify that anonymous can access the simpletest_examples page.
    $this->drupalGet('examples/fapi_example/container_demo');
    $this->assertResponse(200, 'The Demo of Container page is available.');

    // Post the form.
    $edit = [
      'name' => 'Dave',
      'pen_name' => 'DMan',
      'title' => 'My Book',
      'publisher' => 'me',
      'diet' => 'vegan'
    ];
    $this->drupalPostForm('/examples/fapi_example/container_demo', $edit, t('Submit'));
    $this->assertText('Value for name: Dave');
    $this->assertText('Value for pen_name: DMan');
    $this->assertText('Value for title: My Book');
    $this->assertText('Value for publisher: me');
    $this->assertText('Value for diet: vegan');
  }

}
