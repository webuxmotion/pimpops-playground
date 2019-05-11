<?php

namespace Site\Controller;

class HomeController extends SiteController {
 
  public function index() {
    $this->view->render('pages/index');
  }
    
  public function news() {
    echo 'News page';
  }

  public function oneNew($id) {
    echo 'New id: ' . $id;
  }
}
