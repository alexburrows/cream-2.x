<?php

/**
 * @file
 * Contains \Drupal\rules\Plugin\RulesDataProcessor\TokenProcessor.
 */

namespace Drupal\rules\Plugin\RulesDataProcessor;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\PluginBase;
use Drupal\rules\Context\DataProcessorInterface;
use Drupal\rules\Engine\ExecutionStateInterface;
use Drupal\rules\TypedData\PlaceholderResolverInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A data processor for placeholder token replacements.
 *
 * @RulesDataProcessor(
 *   id = "rules_tokens",
 *   label = @Translation("Placeholder token replacements")
 * )
 */
class TokenProcessor extends PluginBase implements DataProcessorInterface, ContainerFactoryPluginInterface {

  /**
   * The placeholder resolver.
   *
   * @var \Drupal\rules\TypedData\PlaceholderResolverInterface
   */
  protected $placeholderResovler;

  /**
   * Constructs a TokenProcessor object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\rules\TypedData\PlaceholderResolverInterface $placeholder_resolver
   *   The placeholder resolver.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PlaceholderResolverInterface $placeholder_resolver) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->placeholderResovler = $placeholder_resolver;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('typed_data.placeholder_resolver')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function process($value, ExecutionStateInterface $rules_state) {
    $data = [];
    $placeholders_by_data = $this->placeholderResovler->scan($value);
    foreach ($placeholders_by_data as $variable_name => $placeholders) {
      // Note that accessing an unavailable variable will throw an evaluation
      // exception. That's exactly what needs to happen. Invalid tokens must
      // be checked when checking integrity.
      $data[$variable_name] = $rules_state->getVariable($variable_name);
    }
    return $this->placeholderResovler->replacePlaceHolders($value, $data);
  }

}
