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
    $data['authorized'] = false;

    $hash = $this->auth->hashUser();

    $sql = $this->qb
        ->select()
        ->from('user')
        ->where('token', $hash)
        ->limit(1)
        ->sql();

    $query = $this->db->query($sql, $this->qb->values);

    if (!empty($query)) {
      $data['authorized'] = true;
      $data['userName'] = $query[0]->name;
    }

    $this->view->render('pages/profile', $data);
  }
}
