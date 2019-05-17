<?php

namespace Site\Controller;

class LoginController extends SiteController {
  
  public function loginFacebook() {

    session_start();

    if(isset($_GET['state'])) {
        $_SESSION['FBRLH_state'] = $_GET['state'];
    }

    $fb = new \Facebook\Facebook([
        'app_id' => '',
        'app_secret' => '',
        'default_graph_version' => 'v2.10',
        //'default_access_token' => '{access-token}', // optional
    ]);

    $access_token = $fb->getRedirectLoginHelper()->getAccessToken();

    if(empty($access_token)) {
      header(
        'Location: ' . $fb
          ->getRedirectLoginHelper()
          ->getLoginUrl("http://localhost/login_facebook")
      );
    }

    if(isset($access_token)) {

        try {
            $response = $fb->get('/me',$access_token);

            $fb_user = $response->getGraphUser();
            $userId = $fb_user->getId();
            $userName = $fb_user->getName();

            $sql = $this->qb
                ->select()
                ->from('user')
                ->where('fb_id', $userId)
                ->limit(1)
                ->sql();

            $query = $this->db->query($sql, $this->qb->values);

            if (!empty($query)) {
                $user = $query[0];
                
                $hash = md5($user->fb_id . $user->password . $this->auth->salt());

                $sql = $this->qb
                    ->update('user')
                    ->set(['token' => $hash])
                    ->where('id', $user->id)->sql();

                $this->db->execute($sql, $this->qb->values);

                $this->auth->authorize($hash);

                header( 'Location: /profile');
                die();
            }

            $hash = md5($userId . $this->auth->salt());

            $sql = $this->qb
                ->insert('user')
                ->set([
                  'password' => 'default',
                  'name' => $userName,
                  'fb_id' => $userId,
                  'token' => $hash
                ])
                ->sql();

            $this->db->execute($sql, $this->qb->values);
            $this->auth->authorize($hash);

            header( 'Location: /profile');
            die();

        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo  'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }

    }
  }

  public function logout() {
    $this->auth->unAuthorize();  
    header( 'Location: /profile');
    exit;
  }
}
