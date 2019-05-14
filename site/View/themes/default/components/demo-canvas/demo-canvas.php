<?php
  $i = $demoCanvas;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
?>
<div class="demo-canvas <?=$b['classes']?>">
  <div class="demo-canvas__header">pimpops/html5-starter</div>
  <div class="demo-canvas__close-button-wrap">
    <?php
      $data['button'] = [
        'tag' => 'button',
        'onClick' => 'modal.close();',
        'icon' => 'close-black-icon.svg',
        'classes' => 'button_view_close-modal',
        'text' => '',
      ];
      $ctx->theme->block('components/button/button', $data);
    ?>  
  </div>
  <div class="demo-canvas__scale-controls">
    <div class="demo-canvas__scale-control-item a-pb-10">
      <?php
        $data['button'] = [
          'tag' => 'button',
          'icon' => 'plus-rounded.svg',
          'classes' => 'button_view_demo-canvas',
          'text' => '',
        ];
        $ctx->theme->block('components/button/button', $data);
      ?>  
    </div>
    <div class="demo-canvas__scale-control-item">
      <?php
        $data['button'] = [
          'tag' => 'button',
          'icon' => 'minus-rounded.svg',
          'classes' => 'button_view_demo-canvas',
          'text' => '',
        ];
        $ctx->theme->block('components/button/button', $data);
      ?>  
    </div>
  </div>
</div>
