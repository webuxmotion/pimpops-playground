<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "TEAM"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<div class="content">
  <div class="g-container">
    <div class="content__body">
      <h2 class="a-pt-20">Core team:</h2>
      <ol class="a-pt-20">
        <li><a>Pereverziev Andrii</a> - CEO</li>
      </ol>
      <h2 class="a-pt-20">Volunteers:</h2>
      <h2 class="a-pt-20">Trainees:</h2>
    </div>
  </div> 
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
