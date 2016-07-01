<?php

/**
 * @file
 * Contains \Drupal\rules\Plugin\RulesAction\BanIP.
 */

namespace Drupal\rules\Plugin\RulesAction;

use Drupal\ban\BanIpManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\rules\Core\RulesActionBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the 'Ban IP' action.
 *
 * @RulesAction(
 *   id = "rules_ban_ip",
 *   label = @Translation("Ban an IP address"),
 *   category = @Translation("Ban"),
 *   context = {
 *     "ip" = @ContextDefinition("string",
 *       label = @Translation("IP Address"),
 *       description = @Translation("Ban an IP using the Ban Module. If no IP is provided, the current user IP is used."),
 *       default_value = NULL,
 *       required = false
 *     )
 *   }
 * )
 *
 * @todo: Add access callback information from Drupal 7.
 * @todo: We should maybe use a dedicated data type for the ip address, as we
 * do in Drupal 7.
 * @todo: This action depends on the ban module. We need to have a way to
 * specify this.
 */
class BanIP extends RulesActionBase implements ContainerFactoryPluginInterface {

  /**
   * The ban manager used to ban the IP.
   *
   * @var \Drupal\ban\BanIpManagerInterface $banManger
   */
  protected $banManager;

  /**
   * The corresponding request.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $request;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('ban.ip_manager'),
      $container->get('request')
    );
  }

  /**
   * Constructs the BanIP object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\ban\BanIpManagerInterface $ban_manager
   *   The ban manager.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The corresponding request.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, BanIpManagerInterface $ban_manager, Request $request) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->banManager = $ban_manager;
    $this->request = $request;
  }

  /**
   * Executes the action with the given context.
   *
   * @param string $ip
   *   (optional) The IP address that should be banned.
   */
  protected function doExecute($ip = NULL) {
    if (!isset($ip)) {
      $ip = $this->request->getClientIp();
    }

    $this->banManager->banIp($ip);
  }

}
