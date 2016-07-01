<?php

/**
 * @file
 * Contains \Drupal\disqus\DisqusCommentManagerInterface.
 */

namespace Drupal\disqus;

/**
 * Disqus comment manager contains common functions to manage disqus_comment fields.
 */
interface DisqusCommentManagerInterface {

  /**
   * Utility function to return an array of disqus_comment fields.
   *
   * @param string $entity_type_id
   *   The content entity type to which the disqus_comment fields are attached.
   *
   * @return array
   *   An array of disqus_comment field map definitions, keyed by field name.
   *   Each value is an array with two entries:
   *   - type: The field type.
   *   - bundles: The bundles in which the field appears, as an array with entity
   *     types as keys and the array of bundle names as values.
   *
   * @see \Drupal\Core\Entity\EntityManagerInterface::getFieldMap()
   */
  public function getFields($entity_type_id);

  /**
   * Utility function to return all disqus_comment fields.
   */
  public function getAllFields();

  /**
   * Computes the full settings associated with Disqus SSO.
   *
   * These need to be merged into the settings for basic Disqus integration for
   * actual usage.
   *
   * @return array
   */
  public function ssoSettings();

}
