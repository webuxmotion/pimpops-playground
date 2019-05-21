<div class="contacts a-pb-20">
  <div class="g-container contacts__container">
    <div class="contacts__cell">
      <h2 class="contacts__header">
        Got a question? We'd love to hear from you.<br>
        Send us a message and we'll respond as soon possible.
      </h2> 
    </div>
    <div class="contacts__cell">
      <?php
        $data['form'] = [
          'classes' => 'test'
        ];
        $ctx->theme->block('components/form/shared/contacts', $data);
      ?>  
    </div>
  </div>
</div>
