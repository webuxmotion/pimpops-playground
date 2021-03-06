<?php

namespace Core\Worker\Template;

use Core\Worker\Template\Theme;

class View {

  public $theme;

  public function __construct() {
    $this->theme = new Theme();
  }

  public function render($template, $vars = []) {

    $functions = Theme::getThemePath() . '/functions.php';
    if (file_exists($functions)) {
        include_once $functions;
    }

    $templatePath = $this->getTemplatePath($template, ENV);

    if (!is_file($templatePath)) {
      throw new \InvalidArgumentException(
        sprintf('Template "%s" not found in "%s"', $template, $templatePath)
      ); 
    } 

    $this->theme->setData($vars);
    extract($vars);

    ob_start();
    ob_implicit_flush(0);

    try {
      require $templatePath;
    } catch (\Exception $e) {
      ob_end_clean();
      throw $e;
    }

    echo ob_get_clean();
  }

  private function getTemplatePath($template, $env = null) {
    if ($env == 'Site') {
      return ROOT_DIR . '/' . mb_strtolower(ENV) . '/View/themes/default/' . $template . '.php';
    } 
    return ROOT_DIR . '/View/themes/default/' . $template . '.php';
  }
}

?>
