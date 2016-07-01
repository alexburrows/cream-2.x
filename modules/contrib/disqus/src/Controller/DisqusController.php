<?php

namespace Drupal\disqus\Controller;

use Drupal\Core\Controller\ControllerBase;

class DisqusController extends ControllerBase {

  /**
   * Menu callback; Automatically closes the window after the user logs in.
   *
   * @return array
   *   A render array containing the confirmation message and link that closes overlay window.
   */
  public function closeWindow() {
     return [
       // Note: We are using '@' on purpose to not have bad protocol filtering.
       '#markup' => $this->t(
         'Thank you for logging in. Please close this window, or <a href="@clickhere">click here</a> to continue.',
         ['@clickhere' => 'javascript:window.close();']
       ),
       '#attached' => [
         'js' => [
           [
             'type' => 'inline',
             'data' => 'window.close();',
           ],
         ],
       ],
     ];
  }

}
