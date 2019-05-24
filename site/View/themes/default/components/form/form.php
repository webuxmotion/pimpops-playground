<?php
  $i = $form;
  $b['classes'] = (isset($i['classes']) ? $i['classes'] : '');
  $b['formdata'] = (isset($i['formdata']) ? $i['formdata'] : '');
  $b['button'] = (isset($i['button']) ? $i['button'] : '');
  $b['onSubmit'] = (isset($i['onSubmit']) ? $i['onSubmit'] : '');
?>
<form 
  class="form <?=$b['classes']?>"
  onSubmit=<?=$b['onSubmit']?>
  method="get"
  action="sdfsd"
>
  <div class="form__content">
  <?php 
    foreach ($b['formdata'] as $item) {
      $data['formField'] = $item;
      $ctx->theme->block('components/form-field/form-field', $data); 
    }
  ?>
  
  
  <?php 
    if (isset($b['button'])) {
      $data['button'] = $b['button'];
      $ctx->theme->block('components/button/button', $data); 
    }
  ?>
  </div>

  <div class="form__sending-message">
    Sending the message...
  </div>

  <div class="form__success-message">
    Message has been sent!
  </div>

  
</form>
