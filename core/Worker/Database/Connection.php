<?php

namespace Core\Worker\Database;

use \PDO;

class Connection {

  private $link;
  
  public function __construct($config) {
      $this->connect($config);
  }
  
  private function connect($config) {

    $dsn = 'mysql:host=' . $config['host'] .';dbname=' . $config['db_name'] .';charset=' . $config['charset'];
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $this->link = new PDO($dsn, $config['username'], $config['password'], $options);

    return $this;
  }
  
  public function execute($sql, $values = []) {

    $sth = $this->link->prepare($sql);

    return $sth->execute($values);
  }

  public function query($sql, $values = [], $statement = PDO::FETCH_OBJ) {

    $sth = $this->link->prepare($sql);
    $sth->execute($values);
    $result = $sth->fetchAll($statement);

    if($result === false){
        return [];
    }

    return $result;
  }
  
  public function lastInsertId() {
    return $this->link->lastInsertId();
  }
}
