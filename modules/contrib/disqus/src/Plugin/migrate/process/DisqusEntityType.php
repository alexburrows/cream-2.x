<?php

/**
 * @file
 * Contains \Drupal\disqus\Plugin\migrate\process\DisqusEntityType.
 */

namespace Drupal\disqus\Plugin\migrate\process;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;
use Drupal\migrate\Entity\MigrationInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\migrate\MigrateSkipRowException;

/**
 * Gives the entity_type from the disqus identifier.
 *
 * @MigrateProcessPlugin(
 *   id = "disqus_comment_entity_type"
 * )
 */
class DisqusEntityType extends ProcessPluginBase implements ContainerFactoryPluginInterface {

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityTypeManager;

  /**
   * Constructs a DisqusEntityType object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition, MigrationInterface $migration = NULL) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $id_parts = explode("/", $value);
    $entity = $this->entityTypeManager->getDefinition($id_parts[0], FALSE);
    if($entity == null) {
      // Or maybe migrate comments some other way
      throw new MigrateSkipRowException();
    }
    return $id_parts[0];
  }

}
