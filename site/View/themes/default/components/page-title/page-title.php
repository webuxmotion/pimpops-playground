<?php
  $i = $pageTitle;
  $b['tag'] = isset($i['tag']) ? $i['tag'] : 'h1';
  $b['text']    = isset($i['text'])    ? $i['text']    : '>>>text';
?>
<div class="page-title a-px-20">
  <div class="g-container">
    <<?=$b['tag']?>><?=$b['text']?></<?=$b['tag']?>>
  </div>
</div>
