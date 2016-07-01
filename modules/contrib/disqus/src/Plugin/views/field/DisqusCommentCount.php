<?php

namespace Drupal\disqus\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\disqus\DisqusCommentManager;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Field handler to present the number of Disqus comments on a node.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("disqus_comment_count")
 */
class DisqusCommentCount extends FieldPluginBase {

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
   * The disqus.settings configuration.
   *
   * @var \Drupal\Core\Config\Config
   */
  protected $config;

  /**
   * Constructs a 'Disqus Comment Count' view field plugin.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\disqus\DisqusCommentManager $disqus_manager
   *   The disqus comment manager object.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, AccountInterface $current_user, DisqusCommentManager $disqus_manager, ConfigFactoryInterface $config_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->currentUser = $current_user;
    $this->disqusManager = $disqus_manager;
    $this->config = $config_factory->get('disqus.settings');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_user'),
      $container->get('disqus.manager'),
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  function render(ResultRow $values) {
    // Ensure Disqus comments are available on the entity and user has access to edit this entity.
    $entity = $this->getEntity($values);
    if (!$entity) {
      return;
    }
    $field = $this->disqusManager->getFields($entity->getEntityTypeId());
    if(!$entity->hasField(key($field))) {
      return;
    }
    if ($entity->get(key($field))->status && $this->currentUser->hasPermission('view disqus comments')) {
      // Build a renderable array for the link.
      $links['disqus_comments_num'] = array(
        'title' => t('Comments'),
        'url' => $entity->urlInfo(),
        'fragment' => 'disqus_thread',
        'attributes' => array(
          // Identify the node for Disqus with the unique identifier:
          // http://docs.disqus.com/developers/universal/#comment-count
          'data-disqus-identifier' => "{$entity->getEntityTypeId()}/{$entity->id()}",
        ),
      );
      $content = array(
        '#theme' => 'links',
        '#links' => $links,
        '#attributes' => array(
          'class' => array('links', 'inline'),
        ),
      );

      /**
       * This attaches disqus.js specified in the disqus.libraries.yml file,
       * which will look for the DOM variable disqusComments which is set below.
       * When found, the disqus javascript api replaces the html element with
       * the attribute: "data-disqus-identifier" and replaces the element with
       * the number of comments on the entity.
       */
      $content['#attached']['library'][] = 'disqus/disqus';
      $content['#attached']['drupalSettings']['disqusComments'] = $this->config->get('disqus_domain');
      return $content;
    }
  }
}
