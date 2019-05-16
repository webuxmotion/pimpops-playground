<div class="canvas">
  <!-- canvas__scale-buttons-list -->
  <div class="canvas__scale-controls">
    <div class="canvas__scale-control-item a-pb-10">
      <?php
        $data['button'] = [
          'onClick' => 'alert(\'plus\')'
        ];
        $ctx->theme->block('components/button/shared/canvas/plus', $data);
      ?>  
    </div>
    <div class="canvas__scale-control-item">
      <?php
        $data['button'] = [
          'onClick' => 'alert(\'minus\')'
        ];
        $ctx->theme->block('components/button/shared/canvas/minus', $data);
      ?>  
    </div>
  </div>
  <!-- END canvas__scale-buttons-list -->
  <!-- canvas__mode-buttons-list -->
  <div class="canvas__mode-controls">
    <div class="canvas__mode-button-wrap a-pr-10">
      <?php
        $data['button'] = [
          'onClick' => 'canvas.show(\'tree\');',
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-tree', $data);
      ?>  
    </div>
    <div class="canvas__mode-button-wrap a-pr-10">
      <?php
        $data['button'] = [
          'onClick' => 'canvas.show(\'model\');',
          'classes' => 'button_shape_rect'
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-model', $data);
      ?>  
    </div>
    <div class="canvas__mode-button-wrap">
      <?php
        $data['button'] = [
          'onClick' => 'canvas.show(\'cards\');'
        ];
        $ctx->theme->block('components/button/shared/canvas/mode-cards', $data);
      ?>  
    </div>
  </div>
  <!-- END canvas__mode-buttons-list -->

  <div class="canvas__screen-items-group">
    <div data-mode="tree" class="canvas__screen-item canvas__screen-item_type_tree">
      <?php
        $data['clickFunctions'] = $playgroundData['clickFunctions'];
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/tree', $data);
      ?>
    </div> 
    <div data-mode="model" class="canvas__screen-item">
      <?php 
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/model', $data);
      ?>
    </div> 
    <div data-mode="cards" class="canvas__screen-item">
      <?php 
        $ctx->theme->block('playgrounds/pimpops/' . $playgroundData['id'] . '/cards', $data);
      ?>
    </div> 
  </div>  
</div>
