<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "PI-LAB"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <p>In our laboratory we create experimets with new architectures.</p>
      <p>Out goal - find and design the most powerful structures for IT-projects.</p>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
