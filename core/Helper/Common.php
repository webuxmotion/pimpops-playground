<?php

namespace Core\Helper;

class Common {
   
  static function getMethod() {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function getPathUrl() {

    $pathUrl = $_SERVER['REQUEST_URI'];
    $position = strpos($pathUrl, '?');

    return $position 
      ? substr($pathUrl, 0, $position) 
      : $pathUrl;
  }

  public static function getSiteAssetsRoot() {
    return "/site/View/themes/default/";
  }
}
