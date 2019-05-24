<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "PROFILE"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <h2>Place for profile card and login/registration forms</h2>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<script src="<?=app()?>/app.js"></script>
<?php $this->theme->foot(); ?>
