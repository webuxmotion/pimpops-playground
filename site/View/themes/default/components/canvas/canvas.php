<?php $ctx->theme->block('components/canvas/deps'); ?>
<div class="canvas">
  <!-- canvas__scale-buttons-list -->
  <div class="canvas__scale-buttons-list">
    <div class="canvas__scale-button-wrap a-pb-10">
      <div class="canvas__scale-button canvas__button">
        <svg class="canvas__scale-button-image" width="29" height="29" xmlns="http://www.w3.org/2000/svg">
          <g stroke="#000" fill="none" fill-rule="evenodd">
            <circle cx="14.5" cy="14.5" r="14"/>
            <path d="M14.5 5.085v18.881M23.973 14.562H5.055"/>
          </g>
        </svg> 
      </div>
    </div>
    <div class="canvas__scale-button-wrap">
      <div class="canvas__scale-button canvas__button">
        <svg class="canvas__scale-button-image" width="29" height="29" xmlns="http://www.w3.org/2000/svg">
          <g stroke="#000" fill="none" fill-rule="evenodd">
            <circle cx="14.5" cy="14.5" r="14"/>
            <path d="M23.973 14.562H5.055"/>
          </g>
        </svg>  
      </div>
    </div>
  </div>
  <!-- END canvas__scale-buttons-list -->
  <!-- canvas__mode-buttons-list -->
  <div class="canvas__mode-buttons-list">
    <div class="canvas__mode-button-wrap a-pr-10">
      <div class="canvas__mode-button canvas__button">
        <img class="canvas__mode-button-image" src="<?=assets().'/images/tree-mode.svg'?>">
      </div>
    </div>
    <div class="canvas__mode-button-wrap a-pr-10">
      <div class="canvas__mode-button canvas__mode-button_view_rect canvas__button is-active">
        <img class="canvas__mode-button-image" src="<?=assets().'/images/model-mode.svg'?>">
      </div>
    </div>
    <div class="canvas__mode-button-wrap">
      <div class="canvas__mode-button canvas__button">
        <img class="canvas__mode-button-image" src="<?=assets().'/images/cards-mode.svg'?>">
      </div>
    </div>
  </div>
  <!-- END canvas__mode-buttons-list -->
  <div class="canvas__image-wrap">
    <?php 
      $data['clickFunctions'] = [
        'index' => 'canvas.showFile(\'index\');',
        'app' => 'canvas.showFile(\'app\');',
        'styles' => 'canvas.showFile(\'styles\');',
      ];
      $ctx->theme->block('components/canvas/canvas-img', $data); 
    ?>
  </div>
</div>
