<?php
  $i = $demoCanvas;
  $b['classes'] = isset($i['classes']) ? $i['classes'] : '';
?>
<div class="demo-canvas <?=$b['classes']?>">
  <div class="demo-canvas__header">pimpops/<?=$playgroundData['projectName']?></div>
  <div class="demo-canvas__close-button-wrap">
    <?php
      $data['button'] = [
        'onClick' => 'modal.close();demoCanvas.reset();'
      ];
      $ctx->theme->block('components/button/shared/canvas/close', $data);
    ?>  
  </div>
  <div class="demo-canvas__scale-controls">
    <div class="demo-canvas__scale-control-item a-pb-10">
      <?php
        $data['button'] = [
          'onClick' => 'alert(\'plus\')'
        ];
        $ctx->theme->block('components/button/shared/canvas/plus', $data);
      ?>  
    </div>
    <div class="demo-canvas__scale-control-item">
      <?php
        $data['button'] = [
          'onClick' => 'alert(\'minus\')'
        ];
        $ctx->theme->block('components/button/shared/canvas/minus', $data);
      ?>  
    </div>
  </div>
  <div class="demo-canvas__mode-controls">
    <div class="demo-canvas__mode-control-item a-pr-10">
      <?php
        $data['button'] = [
          'onClick' => 'demoCanvas.show(\'tree\');canvas.show(\'tree\');',
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-tree', $data);
      ?>  
    </div>
    <div class="demo-canvas__mode-control-item a-pr-10">
      <?php
        $data['button'] = [
          'onClick' => 'demoCanvas.show(\'model\');canvas.show(\'model\');',
          'classes' => 'button_shape_rect'
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-model', $data);
      ?>  
    </div>
    <div class="demo-canvas__mode-control-item">
      <?php
        $data['button'] = [
          'onClick' => 'demoCanvas.show(\'cards\');canvas.show(\'cards\');'
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-cards', $data);
      ?>  
    </div>
  </div>
  <div class="demo-canvas__screen-items-group">
    <div data-mode="tree" class="demo-canvas__screen-item demo-canvas__screen-item_type_tree">
      <?php
        $data['clickFunctions'] = mixClickFunction(
          $playgroundData['clickFunctions'], 
          'canvas.showFromDemoCanvas();'
        );
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/tree', $data);
      ?>
    </div> 
    <div data-mode="model" class="demo-canvas__screen-item">
      <?php 
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/model', $data);
      ?>
    </div> 
    <div data-mode="cards" class="demo-canvas__screen-item">
      <?php 
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/cards', $data);
      ?>
    </div> 
  </div>  
</div>
