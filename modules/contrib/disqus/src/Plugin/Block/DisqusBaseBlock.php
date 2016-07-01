<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\Block\DisqusBaseBlock.
 */

namespace Drupal\disqus\Plugin\Block;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Component\Utility\Html;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\disqus\DisqusCommentManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;

abstract class DisqusBaseBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * Disqus comment manager object.
   *
   * @var \Drupal\disqus\DisqusCommentManager
   */
  protected $disqusManager;

  /**
   * The current route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * Disqus config object.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected $disqusConfig;

  /**
   * Constructs a new DisqusBaseBlock.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match.
   * @param \Drupal\disqus\DisqusCommentManager $disqus_manager
   *   The disqus comment manager object.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The account for which view access should be checked.
   * @param \Drupal\Core\Config\ImmutableConfig $disqus_config
   *   Disqus config object.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, RouteMatchInterface $route_match, DisqusCommentManager $disqus_manager, AccountInterface $current_user, ImmutableConfig $disqus_config) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->currentUser = $current_user;
    $this->disqusManager = $disqus_manager;
    $this->routeMatch = $route_match;
    $this->disqusConfig = $disqus_config;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_route_match'),
      $container->get('disqus.manager'),
      $container->get('current_user'),
      $container->get('config.factory')->get('disqus.settings')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'items' => 5,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['disqus'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Disqus settings'),
      '#tree' => TRUE,
    ];

    $form['disqus']['items'] = [
      '#type' => 'select',
      '#title' => $this->t('Number of items to show'),
      '#options' => [1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      '#default_value' => $this->configuration['items'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    foreach ($form_state->getValue('disqus') as $k => $v) {
      $this->configuration[$k] = $v;
    }
  }

  /**
   * {@inheritdoc}
   */
  function build() {
    $function = $this->functionId();
    $url = Url::fromUri(
      "http://disqus.com/forums/{$this->disqusConfig->get('disqus_domain')}/$function.js",
      [
        'external' => TRUE,
        'query' => $this->buildQuery(),
      ]
    )->toString();
    return [
      'widget' => [
        'script_tag' => [
          '#markup' => new FormattableMarkup('<script type="text/javascript" src="' . $url  . '"></script>', []),
        ],
        '#theme_wrappers' => ['container'],
        '#attributes' => [
          'id' => Html::getUniqueId('disqus-' . $function),
          'class' => ['dsq-widget'],
        ],
      ],
    ];
  }

  /**
   * Gets name of Disqus function to be used when rendering block.
   *
   * @return string
   *   Name of the function.
   */
  abstract protected function functionId();

  /**
   * Gets query values for Disqus widget URL.
   *
   * @return array
   *   Array of query values for Disqus widget URL.
   */
  protected function buildQuery() {
    return [
      'domain' => $this->disqusConfig->get('disqus_domain'),
      'num_items' => $this->configuration['items'],
    ];
  }

}
