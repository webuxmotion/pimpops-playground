<?php
  $i = $button;
  $b['tag'] = isset($i['tag']) ? $i['tag'] : '';
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['text']    = isset($i['text'])    ? $i['text']    : '>>>text';
  $b['href']    = isset($i['href'])    ? $i['href']    : '>>>href';
  $b['icon']    = isset($i['icon'])    ? $i['icon']    : null;
  $b['onClick'] = isset($i['onClick']) ? $i['onClick'] : null;
  $b['attributesStr'] = '';
  if (isset($i['attr'])) {
    if (count($i['attr'])) {
      foreach ($i['attr'] as $key => $item) {
        $b['attributesStr'] .= $key . '="' . $item . '"';
      }
    } 
  }
?>

<<?=$b['tag']?> 
  href="<?=$b['href']?>" 
  class="button <?=$b['classes']?>"
  onClick="<?=$b['onClick']?>"
  <?=$b['attributesStr']?>
>
  <span><?=$b['text']?></span>
  <?php if (isset($b['icon'])) : ?>
    <span class="button__icon">
      <img class="button__icon-img" src="<?=assets()?>/images/<?=$b['icon']?>">
    </span>
  <?php endif; ?>
</<?=$b['tag']?>>
