<div class="pg a-px-20">
  <div class="g-container">
    <div class="pg__frame">
      <div class="pg__header">
        <div class="pg__header-cell">
          <div class="pg__header-title">Playground</div>
        </div>
        <div class="pg__header-cell pg__header-cell_main">
          <div class="pg__header-outer-link">
            <?php
              $data['link'] = [
                'classes' => 'link_view_frame-github',
                'target' => '_blank',
                'text' => 'pimpops/html5-starter',
                'icon' => 'blank-icon-black.svg',
                'href' => 'https://github.com/pimpops'
              ];
              $ctx->theme->block('components/link/link', $data);
            ?>
          </div>
        </div>
        <div class="pg__header-cell pg__header-cell_right">
            <?php
              $data['button'] = [
                'classes' => 'button_view_fullwidth',
                'tag' => 'button ',
                'icon' => 'full-width-icon.svg',
                'text' => ''
              ];
              $ctx->theme->block('components/button/button', $data);
            ?>
        </div>
      </div>
      <div class="pg__main">
        <div class="pg__sidebar">
          <div class="pg__canvas">
            <?php $ctx->theme->block('components/canvas/canvas'); ?>
          </div>
        </div>
        <div class="pg__content">
          <?php $ctx->theme->block('components/file-placeholder/file-placeholder'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
