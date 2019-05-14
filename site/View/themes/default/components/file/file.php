<?php
  $i = $file;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
?>
<div class="file <?=$b['classes']?>">
  <div class="file__header">
    <div class="file__tab">
      <div class="file__tab-name">index.html</div>
      <div class="file__tab-close">
        <?php
          $data['button'] = [
            'tag' => 'button',
            'onClick' => 'canvas.closeFile();',
            'icon' => 'close-black-icon.svg',
            'classes' => 'button_view_close-file',
            'text' => '',
          ];
          $ctx->theme->block('components/button/button', $data);
        ?>  
      </div>
    </div>
  </div>
  <div class="file__content">
    test 
  </div>
</div>
