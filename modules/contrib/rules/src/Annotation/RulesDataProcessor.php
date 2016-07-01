<?php

/**
 * @file
 * Contains \Drupal\rules\Annotation\RulesDataProcessor.
 */

namespace Drupal\rules\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines the RulesDataProcessor annotation class.
 *
 * This annotation is used to identify plugins that want to alter variables
 * before they are passed on during Rules execution.
 *
 * @Annotation
 */
class RulesDataProcessor extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the rules plugin.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The data types this data processor can be applied to.
   *
   * @var array
   */
  public $types;

}
