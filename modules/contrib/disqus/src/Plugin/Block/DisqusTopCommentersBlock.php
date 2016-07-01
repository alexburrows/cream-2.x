<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Block\DisqusTopCommentersBlock.
 */

namespace Drupal\disqus\Plugin\Block;

use Drupal\Core\Form\FormStateInterface;

/**
 *
 * @Block(
 *   id = "disqus_top_commenters",
 *   admin_label = @Translation("Disqus: Top Commenters"),
 *   module = "disqus"
 * )
 */
class DisqusTopCommentersBlock extends DisqusBaseBlock {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'show_avatars' => TRUE,
      'avatar_size' => 32,
      'hide_mods' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function buildQuery() {
    return parent::buildQuery() + [
      'avatar_size' => $this->configuration['avatar_size'],
      'hide_avatars' => (int) (!$this->configuration['show_avatars']),
      'hide_mods' => (int) $this->configuration['hide_mods'],
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

    $form['disqus']['hide_mods'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Hide moderators in ranking'),
      '#default_value' => $this->configuration['hide_mods'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function functionId() {
    return 'top_commenters_widget';
  }
}
