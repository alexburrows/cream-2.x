<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\migrate\source\DisqusEnabledNodeType.
 */

namespace Drupal\disqus\Plugin\migrate\source;

use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * Disqus enabled content types migration source.
 *
 * @MigrateSource(
 *   id = "disqus_enabled_content_types"
 * )
 */
class DisqusEnabledNodeTypes extends DrupalSqlBase {

  /**
   * {@inheritdoc}
   */
  protected function initializeIterator() {
    return new \ArrayIterator($this->values());
  }

  /**
   * Return the values of the variables specified in the plugin configuration.
   *
   * @return array
   *   An associative array where the keys are the variables specified in the
   *   plugin configuration and the values are the values found in the source.
   *   Only those values are returned that are actually in the database.
   */
  protected function values() {
    $values = [];
    if($result = $this->prepareQuery()->execute()->fetchAllKeyed()) {
      $enabled_types = unserialize($result['disqus_nodetypes']);
      $enabled_types = array_filter($enabled_types);
      $defaults = unserialize($result['disqus_nodetypes_default']);
      $defaults = array_filter($defaults);
      foreach ($enabled_types as $type) {
        $values[] = [
          'type' => $type,
          'default' => !empty($defaults[$type]),
        ];
      }
    }
    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function count() {
    return count($this->values());
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'type' => $this->t('Content type with enabled Disqus'),
      'default' => $this->t('Default Disqus status for node type'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    return $this->getDatabase()
      ->select('variable', 'v')
      ->fields('v', ['name', 'value'])
      ->condition('v.name', ['disqus_nodetypes', 'disqus_nodetypes_default'], 'IN');
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['type']['type'] = 'string';
    return $ids;
  }

}
