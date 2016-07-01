<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Block\DisqusCombinationWidgetBlock.
 */

namespace Drupal\disqus\Plugin\Block;

use Drupal\Core\Form\FormStateInterface;

/**
 *
 * @Block(
 *   id = "disqus_combination_widget",
 *   admin_label = @Translation("Disqus: Combination Widget"),
 *   module = "disqus"
 * )
 */
class DisqusCombinationWidgetBlock extends DisqusBaseBlock {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'color_theme' => 'blue',
      'default_tab_view' => 'people',
      'excerpt_length' => '200',
      'hide_mods' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function buildQuery() {
    return parent::buildQuery() + [
      'color' => $this->configuration['color_theme'],
      'default_tab' => $this->configuration['default_tab'],
      'excerpt_length' => $this->configuration['excerpt_length'],
      'hide_mods' => (int) $this->configuration['hide_mods'],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $form['disqus']['color_theme'] = [
      '#type' => 'select',
      '#title' => $this->t('Color Theme'),
      '#options' => [
        'blue' => $this->t('Blue'),
        'grey' => $this->t('Grey'),
        'green' => $this->t('Green'),
        'red' => $this->t('Red'),
        'orange' => $this->t('Orange'),
      ],
      '#default_value' => $this->configuration['color_theme'],
    ];

    $form['disqus']['default_tab_view'] = [
      '#type' => 'select',
      '#title' => $this->t('Default Tab View'),
      '#options' => [
        'people' => $this->t('People'),
        'recent' => $this->t('Recent'),
        'popular' => $this->t('Popular'),
      ],
      '#default_value' => $this->configuration['default_tab_view'],
    ];

    $form['disqus']['excerpt_length'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Comment Except Length'),
      '#default_value' => $this->configuration['excerpt_length'],
      '#size' => 4,
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
  protected function functionId() {
    return 'combination_widget';
  }

}
