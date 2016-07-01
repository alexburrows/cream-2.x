<?php

/**
 * @file
 * Contains \Drupal\rules\Core\RulesActionInterface.
 */

namespace Drupal\rules\Core;

use Drupal\Core\Executable\ExecutableInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\rules\Context\ContextAwarePluginInterface;
use Drupal\rules\Context\ContextProviderInterface;
use Drupal\rules\Core\ConfigurationAccessControlInterface;

/**
 * Extends the core ActionInterface to provide context.
 */
interface RulesActionInterface extends ExecutableInterface, ContextAwarePluginInterface, ContextProviderInterface, ConfigurationAccessControlInterface {

  /**
   * Returns a list of context names that should be auto-saved after execution.
   *
   * @return array
   *   A subset of context names as specified in the context definition of this
   *   action.
   */
  public function autoSaveContext();

  /**
   * Checks object access.
   *
   * @param mixed $object
   *   The object to execute the action on.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   (optional) The user for which to check access, or NULL to check access
   *   for the current user. Defaults to NULL.
   * @param bool $return_as_object
   *   (optional) Defaults to FALSE.
   *
   * @return bool|\Drupal\Core\Access\AccessResultInterface
   *   The access result. Returns a boolean if $return_as_object is FALSE (this
   *   is the default) and otherwise an AccessResultInterface object.
   *   When a boolean is returned, the result of AccessInterface::isAllowed() is
   *   returned, i.e. TRUE means access is explicitly allowed, FALSE means
   *   access is either explicitly forbidden or "no opinion".
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE);

}
