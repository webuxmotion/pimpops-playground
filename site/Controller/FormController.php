<?php

namespace Site\Controller;

class FormController extends SiteController {

  public function sendContactMessage() {
    $params = $_POST;
    $messageModel = $this->load->model('Message');
    $messageId = $messageModel->repository->createMessage($params);
    echo $messageId;
  }
}
