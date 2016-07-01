<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Block\DisqusRecentCommentersBlock.
 */

namespace Drupal\disqus\Plugin\Block;

use Drupal\Core\Form\FormStateInterface;

/**
 *
 * @Block(
 *   id = "disqus_recent_comments",
 *   admin_label = @Translation("Disqus: Recent Comments"),
 *   module = "disqus"
 * )
 */
class DisqusRecentCommentBlock extends DisqusBaseBlock {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'show_avatars' => TRUE,
      'avatar_size' => 32,
      'excerpt_length' => '200',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function buildQuery() {
    return parent::buildQuery() + [
      'avatar_size' => $this->configuration['avatar_size'],
      'hide_avatars' => (int) (!$this->configuration['show_avatars']),
      'excerpt_length' => $this->configuration['excerpt_length'],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $form['disqus']['show_avatars'] = [
      '#type' => 'select',
      '#title' => $this->t('Show avatars'),
      '#options' => [
        FALSE => $this->t('No'),
        TRUE => $this->t('Yes')
      ],
      '#default_value' => $this->configuration['show_avatars'],
    ];

    $form['disqus']['avatar_size'] = [
      '#type' => 'select',
      '#title' => $this->t('Avatar size'),
      '#options' => [
        24 => $this->t('X-Small (24px)'),
        32 => $this->t('Small (32px)'),
        48 => $this->t('Medium (48px)'),
        92 => $this->t('Large (92px)'),
        128 => $this->t('X-Large (128px)'),
      ],
      '#default_value' => $this->configuration['avatar_size'],
    ];

    $form['disqus']['excerpt_length'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Comment Except Length'),
      '#default_value' => $this->configuration['excerpt_length'],
      '#size' => 4,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function functionId() {
    return 'recent_comments_widget';
  }
}
