<div class="modal">
  <div class="modal__body">
    <?php
      $data['demoCanvas'] = [
        "classes" => "demo-canvas_size_600"
      ];  
      $ctx->theme->block('components/demo-canvas/demo-canvas', $data); 
    ?>
  </div>
  <div class="modal__bg" onClick="modal.close();demoCanvas.reset();"></div>
</div>
