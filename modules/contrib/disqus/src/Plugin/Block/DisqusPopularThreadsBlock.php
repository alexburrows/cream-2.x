<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Block\DisqusPopularThreadsBlock.
 */

namespace Drupal\disqus\Plugin\Block;

/**
 *
 * @Block(
 *   id = "disqus_popular_threads",
 *   admin_label = @Translation("Disqus: Popular Threads"),
 *   module = "disqus"
 * )
 */
class DisqusPopularThreadsBlock extends DisqusBaseBlock {

  /**
   * {@inheritdoc}
   */
  public function functionId() {
    return 'popular_threads_widget';
  }

}
