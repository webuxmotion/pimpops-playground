<?php

namespace Core\Worker\Template;
use Core\Helper\Common;

class Theme {
  
  const RULES_NAME_FILE = [
    'header'  => 'header-%s',
    'footer'  => 'footer-%s',
    'sidebar' => 'sidebar-%s'
  ];

  public $url = '';
  public $data = [];

  public function header($name = null) {

    $name = (string) $name;
    $file = 'header';

    if ($name !== '') {
      $file = sprintf(self::RULES_NAME_FILE['header'], $name);
    } 

    $this->loadTemplateFile($file); 
  }

  public function head($name = 'head') {
    $this->loadTemplateFile($name); 
  }

  public function foot($name = 'foot') {
    $this->loadTemplateFile($name); 
  }

  public function footer($name = null) {

    $name = (string) $name;
    $file = 'footer';

    if ($name !== '') {
      $file = sprintf(self::RULES_NAME_FILE['footer'], $name);
    } 

    $this->loadTemplateFile($file); 
  }

  public function block($name = '', $data = []) {

    $name = (string) $name;

    if ($name !== '') {
      $this->loadTemplateFile($name, $data); 
    }
  }

  public static function getThemePath() {

    if (ENV !== 'Site') {
      $themePath = ROOT_DIR . '/View/themes/default/';
    } else {
      $themePath = ROOT_DIR . '/' . mb_strtolower(ENV) . '/View/themes/default/';
    }
    return $themePath;
  }

  private function loadTemplateFile($nameFile, $data = []) {

    if (ENV !== 'Site') {
      $templateFile = ROOT_DIR . '/View/themes/default/' . $nameFile . '.php';
    } else {
      $templateFile = ROOT_DIR . '/' . mb_strtolower(ENV) . '/View/themes/default/' . $nameFile . '.php';
    }

    if (is_file($templateFile)) {
      extract($data);
      require $templateFile;
    } else {
      throw new \Exception(sprintf(
        'View file %s does not exist!', $templateFile)
      );  
    }
  }

  public function getData() {
    return $this->data;
  }

  public function setData($data) {
    $this->data = $data;
  }
}

?>
