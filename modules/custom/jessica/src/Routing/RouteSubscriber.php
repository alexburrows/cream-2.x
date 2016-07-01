<?php

namespace Drupal\mymodule\Routing;


use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase{
  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path of mymodule.mypage to use a hypen
    if ($route = $collection->get('mymodule.mypage')) {
      $route->setPath('/my-page');
    }
  }
}