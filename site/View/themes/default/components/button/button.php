<?php
  $i = $button;
  $b['tag'] = isset($i['tag']) ? $i['tag'] : '';
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['text']    = isset($i['text'])    ? $i['text']    : '>>>text';
  $b['href']    = isset($i['href'])    ? $i['href']    : '>>>href';
?>

<<?=$b['tag']?> href="<?=$b['href']?>" class="button <?=$b['classes']?>">
  <?=$b['text']?>
</<?=$b['tag']?>>
