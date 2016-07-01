<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\migrate\source\DisqusCommentsStatus.
 */

namespace Drupal\disqus\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * Disqus comments status.
 *
 * @MigrateSource(
 *   id = "disqus_comments_status"
 * )
 */
class DisqusCommentsStatus extends DrupalSqlBase {

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'nid' => $this->t('ID of Node this status belongs to'),
      'status' => $this->t('Disqus comments status'),
      'identifier' => $this->t('Disqus thread identifier'),
    ];
  }

  /**
   * Gets content types Disqus is enabled for.
   *
   * @return array
   *   Array of content type machine names.
   */
  protected function getEnabledTypes() {
    $enabled = $this->getDatabase()
      ->select('variable', 'v')
      ->fields('v', ['value'])
      ->condition('v.name', 'disqus_nodetypes')
      ->execute()
      ->fetchField();
     return array_filter(unserialize($enabled));
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    /** @var \Drupal\Core\Database\Query\SelectInterface $query */
    $query = $this->select('node', 'n');
    $query->condition('n.type', $this->getEnabledTypes(), 'IN');
    $query->orderBy('n.nid');
    $query->leftJoin('disqus', 'd', 'd.nid=n.nid');
    $query->addField('n', 'nid', 'nid');
    # No entry in {disqus} table means status == 1.
    $query->addExpression('IF(d.status IS NULL, 1, d.status)', 'status');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function count() {
    return $this->getDatabase()
      ->select('node', 'n')
      ->condition('n.type', $this->getEnabledTypes(), 'IN')
      ->countQuery()
      ->execute()
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {
    parent::prepareRow($row);
    $status = $row->getSourceProperty('status');
    $nid = $row->getSourceProperty('nid');
    $row->setSourceProperty('identifier', 'node/' . $nid);
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['nid']['type'] = 'integer';
    $ids['nid']['alias'] = 'n';
    return $ids;
  }

}
