<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "DOCS | pimpops/html5-starter"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <h2>About html5-starter</h2>
      <p class="a-pt-10">This architecture helps you to create simple html5 project from scratch.</p>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
