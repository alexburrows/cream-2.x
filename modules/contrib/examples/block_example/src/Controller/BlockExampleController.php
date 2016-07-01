<?php

/**
 * @file
 * Contains \Drupal\block_example\Controller\BlockExampleController.
 */

namespace Drupal\block_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

/**
 * Controller routines for block example routes.
 */
class BlockExampleController extends ControllerBase {

  /**
   * A simple controller method to explain what the block example is about.
   */
  public function description() {
    // Make a link from a route to the block admin page.
    $url = Url::fromRoute('block.admin_display');
    $block_admin_link = $this->l($this->t('the block admin page'), $url);

    // Put the link into the content.
    $build = array(
      '#markup' => $this->t('The Block Example provides three sample blocks which demonstrate the various block APIs. To experiment with the blocks, enable and configure them on @block_admin_link.', ['@block_admin_link' => $block_admin_link]),
    );

    return $build;
  }

}
