<?php

namespace Site\Controller;

class HomeController extends SiteController {
 
  public function index() {
    header('Location: /github/pimpops/html5-starter');
    die();
  }

  public function showPlayground($id) {
    $data['id'] = $id;
    $this->view->render('pages/index', $data);
  }
  
  public function pgHtml5Starter() {
    $this->view->render('pages/index');
  }
  
  public function showDocs($id) {
    $data['id'] = $id;
    $this->view->render('pages/docs', $data);
  }

  public function about() {
    $this->view->render('pages/about');
  }

  public function piLab() {
    $this->view->render('pages/pi-lab');
  }

  public function sponsors() {
    $this->view->render('pages/sponsors');
  }
  
  public function team() {
    $this->view->render('pages/team');
  }

  public function customPlayground() {
    $this->view->render('pages/custom-playground');
  }

  public function playgrounds() {
    $this->view->render('pages/playgrounds');
  }

  public function profile() {
    $this->view->render('pages/profile');
  }
}
