<?php

namespace Core\Provider\Database;

use Core\Provider\AbstractProvider;
use Core\Worker\Database\Connection;

class Provider extends AbstractProvider {

  public $workerName = 'db';

  public $config = [
    'host' => 'pimpops-playground',
    'db_name' => 'pimpops_playground',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
  ];

  public function init() {

    $worker = new Connection($this->config);

    $this->di->set($this->workerName, $worker);
  }
}

?>
