<?php

namespace Drupal\mymodule\Routing;
use Symfony\Component\Routing\Route;

class CustomRoutes {
  public function routes() {
    $routes = [];

    // Create mypage route programatically.
    $routes['mymodule.mypage'] = new Route(
      // Path definition.
      'mypage',
      // Route defaults.
      [
        '_controller' => '\Drupal\mymodule\Controller\MyPageController::customPage',
        '_title' => 'Jessica',
      ],
      // Route requirements.
      [
        '_permission' => 'access content',
      ]
    );
    return $routes;
  }
}