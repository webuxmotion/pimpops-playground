<?php
  $i = $formField;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
  $b['label'] = isset($i['label']) ? $i['label'] : null; 
  $b['config'] = '';
  foreach ($i['config'] as $key => $value) {
    $b['config'] .=  $key . "=" . "\"" . $value . "\"";
  }
  switch ($i['element']) {
    case "input":
      $b['element'] = "<input " . $b['config'] . ">";
      break;
    case "textarea":
      $b['element'] = "<textarea " . $b['config'] . "></textarea>";
      break;
    default:
      $b['element'] = "<input placeholder='default'>";
  }
?>
<div 
  class="form-field <?=$b['classes']?>"
>
  <?php if (isset($b['label'])) : ?>
    <div>
    <label for="<?=$i['config']['id']?>"><?=$b['label']?></label>
    </div>
  <?php endif; ?>
  <?=$b['element']?>
</div>
