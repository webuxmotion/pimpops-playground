<?php

function assets() {
  echo \Core\Helper\Common::getSiteAssetsRoot() . 'assets';
}

function app() {
  echo \Core\Helper\Common::getSiteAssetsRoot() . 'app';
}

?>
