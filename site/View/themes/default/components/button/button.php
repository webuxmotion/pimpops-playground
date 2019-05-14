<?php
  $i = $button;
  $b['tag'] = isset($i['tag']) ? $i['tag'] : '';
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['text']    = isset($i['text'])    ? $i['text']    : '>>>text';
  $b['href']    = isset($i['href'])    ? $i['href']    : '>>>href';
  $b['icon']    = isset($i['icon'])    ? $i['icon']    : null;
  $b['onClick'] = isset($i['onClick']) ? $i['onClick'] : null;
?>

<<?=$b['tag']?> 
  href="<?=$b['href']?>" 
  class="button <?=$b['classes']?>"
  onClick="<?=$b['onClick']?>"
>
  <span><?=$b['text']?></span>
  <?php if (isset($b['icon'])) : ?>
    <span class="button__icon">
      <img class="button__icon-img" src="<?=\Core\Helper\Common::getSiteAssetsRoot()?>assets/images/<?=$b['icon']?>">
    </span>
  <?php endif; ?>
</<?=$b['tag']?>>
