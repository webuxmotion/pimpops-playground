<?php

function assets() {
  echo \Core\Helper\Common::getSiteAssetsRoot() . 'assets';
}

function app() {
  echo \Core\Helper\Common::getSiteAssetsRoot() . 'app';
}

function playgrounds() {
  echo \Core\Helper\Common::getSiteAssetsRoot() . 'playgrounds';
}

function mixClickFunction($src, $func) {
  foreach ($src as $key => $item) {
    $src[$key] = $item . $func;
  }
  return $src;
}

?>
