<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "GET CUSTOM PLAYGROUND"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <p>If you want to get the custom playground for your project, contact us.</p>
      <p>Use this form:</p>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
