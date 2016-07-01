<?php

/**
 * @file
 * Contains  \Drupal\mymodule\Controller\MyPageController class.
 */

namespace Drupal\mymodule\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for My Module module.
 */
class MyPageController extends ControllerBase {
  public function customPage() {
    return [
      '#markup' => t('Welcome to my custom page!'),
    ];
  }
  public function cats($name) {
    return [
      '#markup' => t('My cats name is: @name', [
        '@name' => $name,
      ]),
    ];
  }
}