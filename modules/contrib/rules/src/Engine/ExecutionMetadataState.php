<?php

/**
 * @file
 * Contains \Drupal\rules\Engine\ExecutionMetadataState.
 */

namespace Drupal\rules\Engine;

use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\rules\Context\GlobalContextRepositoryTrait;
use Drupal\rules\Exception\RulesIntegrityException;
use Drupal\rules\TypedData\DataFetcherTrait;

/**
 * The state used during configuration time holding data definitions.
 */
class ExecutionMetadataState implements ExecutionMetadataStateInterface {

  use DataFetcherTrait;
  use GlobalContextRepositoryTrait;

  /**
   * The known data definitions.
   *
   * @var \Drupal\Core\TypedData\DataDefinitionInterface
   */
  protected $dataDefinitions = [];

  /**
   * {@inheritdoc}
   */
  public static function create($data_definitions = []) {
    return new static($data_definitions);
  }

  /**
   * Constructs the object.
   *
   * @param \Drupal\Core\TypedData\DataDefinitionInterface[] $data_definitions
   *   (optional) Data definitions to initialize this state with.
   */
  protected function __construct($data_definitions) {
    $this->dataDefinitions = $data_definitions;
    // Add definitions of all global contexts.
    $contexts = $this->getGlobalContextRepository()->getAvailableContexts();
    foreach ($contexts as $name => $context) {
      $this->setDataDefinition($name, $context
        ->getContextDefinition()
        ->getDataDefinition()
      );
    }
  }

  /**
   * {@inheritdoc}
   */
  public function setDataDefinition($name, DataDefinitionInterface $definition) {
    $this->dataDefinitions[$name] = $definition;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getDataDefinition($name) {
    if (!array_key_exists($name, $this->dataDefinitions)) {
      throw new RulesIntegrityException("Unable to get variable $name, it is not defined.");
    }
    return $this->dataDefinitions[$name];
  }

  /**
   * {@inheritdoc}
   */
  public function hasDataDefinition($name) {
    return array_key_exists($name, $this->dataDefinitions);
  }

  /**
   * {@inheritdoc}
   */
  public function removeDataDefinition($name) {
    if (array_key_exists($name, $this->dataDefinitions)) {
      unset($this->dataDefinitions[$name]);
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function fetchDefinitionByPropertyPath($property_path, $langcode = LanguageInterface::LANGCODE_NOT_SPECIFIED) {
    try {
      // Support global context names as variable name by ignoring points in
      // the service name; e.g. @user.current_user_context:current_user.name.
      if ($property_path[0] == '@') {
        list($service, $property_path) = explode(':', $property_path, 2);
      }
      $parts = explode('.', $property_path);
      $var_name = array_shift($parts);
      if (isset($service)) {
        $var_name = $service . ':' . $var_name;
      }
      return $this
        ->getDataFetcher()
        ->fetchDefinitionBySubPaths($this->getDataDefinition($var_name), $parts, $langcode);
    }
    catch (\InvalidArgumentException $e) {
      // Pass on the original exception in the exception trace.
      throw new RulesIntegrityException($e->getMessage(), 0, $e);
    }
  }

}
