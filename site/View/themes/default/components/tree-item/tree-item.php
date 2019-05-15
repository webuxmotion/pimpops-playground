<?php
  $i = $treeItem;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['text']    = isset($i['text'])    ? $i['text']    : null;
  $b['onClick'] = isset($i['onClick']) ? $i['onClick'] : null;
  $b['icon']    = isset($i['icon'])    ? $i['icon']    : null;
  $b['iconSecondary']    = isset($i['iconSecondary'])    ? $i['iconSecondary']    : null;
?>
<div
  class="tree-item 
  <?=$b['classes']?>"
  onClick="<?=$b['onClick']?>"
>
  <?php if (isset($b['icon'])) : ?>
    <span class="tree-item__icon-wrap">
      <img class="tree-item__icon-img" src="<?=assets()?>/images/<?=$b['icon']?>">
    </span>
  <?php endif; ?>
  <?php if (isset($b['iconSecondary'])) : ?>
    <span class="tree-item__icon-wrap tree-item__icon-wrap_secondary">
      <img class="tree-item__icon-img" src="<?=assets()?>/images/<?=$b['iconSecondary']?>">
    </span>
  <?php endif; ?>
  <?php if (isset($b['text'])) : ?>
    <span class="tree-item__text"><?=$b['text']?></span>
  <?php endif; ?>
</div>
