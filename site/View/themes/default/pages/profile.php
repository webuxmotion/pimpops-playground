<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "PROFILE"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content a-px-20">
  <div class="g-container">
    <div class="content__body">
      <?php if(!$authorized) : ?>

      <?php
        $data['button'] = [
          'tag' => 'a',
          'href' => 'login_facebook',
          'icon' => 'facebook-icon.svg',
          'classes' => 'button_view_login-facebook',
          'text' => 'Login with facebook'
        ];
        $this->theme->block('components/button/button', $data);
      ?>  

      <?php else : ?>
      <h2>Hello, <?=$userName;?></h2>

      <a href="/logout">Logout</a>

      <?php endif; ?>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
