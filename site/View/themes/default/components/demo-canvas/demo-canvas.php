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
        'onClick' => 'modal.close();demoCanvas.reset();',
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
  <div class="demo-canvas__mode-controls">
    <div class="demo-canvas__mode-control-item a-pr-10">
      <?php
        $data['button'] = [
          'tag' => 'button',
          'onClick' => 'demoCanvas.show(\'tree\');',
          'icon' => 'tree-mode.svg',
          'classes' => 'button_view_demo-canvas',
          'text' => '',
          'attr' => [
            'data-mode' => 'tree'
          ]
        ];
        $ctx->theme->block('components/button/button', $data);
      ?>  
    </div>
    <div class="demo-canvas__mode-control-item a-pr-10">
      <?php
        $data['button'] = [
          'tag' => 'button',
          'onClick' => 'demoCanvas.show(\'model\');',
          'icon' => 'model-mode.svg',
          'classes' => 'button_view_demo-canvas button_view_demo-canvas-rect',
          'text' => '',
          'attr' => [
            'data-mode' => 'model'
          ]
        ];
        $ctx->theme->block('components/button/button', $data);
      ?>  
    </div>
    <div class="demo-canvas__mode-control-item">
      <?php
        $data['button'] = [
          'tag' => 'button',
          'onClick' => 'demoCanvas.show(\'cards\');',
          'icon' => 'cards-mode.svg',
          'classes' => 'button_view_demo-canvas',
          'text' => '',
          'attr' => [
            'data-mode' => 'cards'
          ]
        ];
        $ctx->theme->block('components/button/button', $data);
      ?>  
    </div>
  </div>
  <div class="demo-canvas__screen-items-group">
    <div data-mode="tree" class="demo-canvas__screen-item">
      <?php
        $data['tree'] = [
        ];  
        $ctx->theme->block('components/tree/tree', $data); 
      ?>
    </div> 
    <div data-mode="model" class="demo-canvas__screen-item">
      <?php 
        $data['clickFunctions'] = [
          'index'  => 'canvas.showFile(\'index\',  canvas.showFromDemoCanvas);',
          'app'    => 'canvas.showFile(\'app\',    canvas.showFromDemoCanvas);',
          'styles' => 'canvas.showFile(\'styles\', canvas.showFromDemoCanvas);'
        ];
        $ctx->theme->block('components/canvas/canvas-img', $data); 
      ?>
    </div> 
    <div data-mode="cards" class="demo-canvas__screen-item">
      cards
    </div> 
  </div>  
</div>
