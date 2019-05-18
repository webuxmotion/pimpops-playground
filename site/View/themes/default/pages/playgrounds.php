<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php
  $data['pageTitle'] = [
    "text" => "PLAYGROUNDS"
  ];
  $this->theme->block('components/page-title/page-title', $data);
?>
<div class="content a-px-20">
  <div class="g-container">
    <div class="content__body">
      <ol>
        <li><a href="/github/pimpops/html5-starter">pimpops/html5-starter</a></li>
        <li><a href="/github/pimpops/php-di-container">pimpops/php-di-container</a></li>
        <li><a href="/github/pimpops/js-solid-s">pimpops/js-solid-s</a></li>
      </ol>
    </div>
  </div>
</div>
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
