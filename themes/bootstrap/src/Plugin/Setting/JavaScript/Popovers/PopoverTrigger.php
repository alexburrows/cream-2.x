<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\JavaScript\Popovers\PopoverTrigger.
 */

namespace Drupal\bootstrap\Plugin\Setting\JavaScript\Popovers;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "popover_trigger" theme setting.
 *
 * @BootstrapSetting(
 *   id = "popover_trigger",
 *   type = "select",
 *   title = @Translation("trigger"),
 *   description = @Translation("How a popover is triggered."),
 *   defaultValue = "click",
 *   options = {
 *     "click" = @Translation("click"),
 *     "hover" = @Translation("hover"),
 *     "focus" = @Translation("focus"),
 *     "manual" = @Translation("manual"),
 *   },
 *   groups = {
 *     "javascript" = @Translation("JavaScript"),
 *     "popovers" = @Translation("Popovers"),
 *     "options" = @Translation("Options"),
 *   },
 * )
 */
class PopoverTrigger extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return !!$this->theme->getSetting('popover_enabled');
  }

}
