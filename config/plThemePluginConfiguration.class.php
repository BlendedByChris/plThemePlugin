<?php

/**
 * This file is a symfony plugin and part of the PromoteLabs.com architecture.
 * (c) PromoteLabs <info@promotelabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A simple theming plugin for Symfony that allows you to configure themed 
 * decorator templates (layout.php) and assets.
 *
 * @package default
 * @author Chris LeBlanc <chris@webPragmatist.com>
 */
class plTheme extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    
    if (sfConfig::get('app_plTheme_enabled')) {

      sfConfig::set('sf_app_template_dir', 
        sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.sfConfig::get('app_plTheme_theme'));

      sfConfig::set('sf_web_js_dir_name', $this->generateAssetDirName('js'));
      sfConfig::set('sf_web_css_dir_name', $this->generateAssetDirName('css'));
      sfConfig::set('sf_web_image_dir_name', $this->generateAssetDirName('image'));
    }

  }
  
  /**
   * Builds assetPath provided.
   *
   * @param string $type
   * @return void
   * @author Chris LeBlanc <chris@webPragmatist.com>
   */
  protected function generateAssetDirName($type) {    
    return strtr(sfConfig::get('app_plTheme_assetPath'), array(
      '%theme%' => sfConfig::get('app_plTheme_theme'),
      '%type%' => $type
      ));
  }
}
