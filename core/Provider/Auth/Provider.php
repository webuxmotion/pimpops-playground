<?php

namespace Core\Provider\Auth;

use Core\Provider\AbstractProvider;
use Core\Worker\Auth\Auth;

class Provider extends AbstractProvider {
  
  public $workerName = 'auth';

  public function init() {
    $w = new Auth();
    $this->di->set($this->workerName, $w);
  }
}
?>
