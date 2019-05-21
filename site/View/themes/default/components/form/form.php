<?php
  $i = $form;
  $b['classes'] = (isset($i['classes']) ? $i['classes'] : '');
  $b['formdata'] = (isset($i['formdata']) ? $i['formdata'] : '');
?>
<form 
  class="form <?=$b['classes']?>"
>
  <?php 
    foreach ($b['formdata'] as $item) {
      $data['formField'] = $item;
      $ctx->theme->block('components/form-field/form-field', $data); 
    }
  ?>
</form>
