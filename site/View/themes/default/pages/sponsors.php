<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "SPONSORS"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <p>Our sponsors makes a significant contribution to web-development sphere.</p>
      <h2 class="a-pt-20">General sponsors:</h2>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
