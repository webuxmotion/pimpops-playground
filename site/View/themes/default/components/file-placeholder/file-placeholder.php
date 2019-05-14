<?php
  $i = $filePlaceholder;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
?>
<div class="file-placeholder <?=$b['classes']?>">
  <div class="file-placeholder__header">
    <div class="file-placeholder__tab">
      <div class="file-placeholder__tab-name"></div>
      <div class="file-placeholder__tab-close"></div>
    </div>
  </div>
  <div class="file-placeholder__content">
    <div class="file-placeholder__message">
      <div class="file-placeholder__message-image-wrap">
        <img class="file-placeholder__message-image" src="<?=assets().'/images/back-arrow.svg'?>">
      </div>
      <h3 class="file-placeholder__message-text">Choose a file<br> here</h3>
    </div>
  </div>
</div>
