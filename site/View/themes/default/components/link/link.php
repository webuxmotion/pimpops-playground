<?php
  $i = $link;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['text']    = isset($i['text'])    ? $i['text']    : '>>>text';
  $b['href']    = isset($i['href'])    ? $i['href']    : '>>>href';
  $b['icon']    = isset($i['icon'])    ? $i['icon']    : null;
  $b['target-tag'] = '';
  if (isset($i['target'])) {
    $b['target-tag'] = 'target="' . $i['target'] . '"';  
  } 
?>

<a href="<?=$b['href']?>" <?=$b['target-tag']?> class="link <?=$b['classes']?>">
  <span><?=$b['text']?></span>
  <?php if (isset($b['icon'])) : ?>
    <span class="link__icon">
      <img class="link__icon-img" src="<?=\Core\Helper\Common::getSiteAssetsRoot()?>assets/images/<?=$b['icon']?>">
    </span>
  <?php endif; ?>
</a>
