<?php

namespace Site\Model\Message;

use Core\Model;

class MessageRepository extends Model {

  public function createMessage($params) {
    $message = new Message;
    $message->setEmail($params['email']);
    $message->setMessage($params['message']);
    $messageId = $message->save();
    return $messageId;
  }
}
