<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\migrate\process\DisqusEntityId.
 */

namespace Drupal\disqus\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;
use Drupal\migrate\MigrateSkipRowException;

/**
 * Gives the entity_id from the disqus identifier.
 *
 * @MigrateProcessPlugin(
 *   id = "disqus_comment_entity_id"
 * )
 */
class DisqusEntityId extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $id_parts = explode("/", $value);
    if(!isset($id_parts[1])) {
      throw new MigrateSkipRowException();
    }
    return $id_parts[1];
  }

}
