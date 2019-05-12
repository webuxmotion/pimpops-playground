<div class="hero">
  <div class="hero__top a-px-20">
    <div class="g-container hero__container">
      <div class="hero__cell">
        <div class="a-pb-35">
          <?php
            $data['link'] = [
              'classes' => 'link_view_read-docs',
              'text' => 'READ DOCS',
              'href' => '/github/pimpops/html5-starter/docs'
            ];
            $ctx->theme->block('components/link/link', $data);
          ?>  
        </div>
        <div>
          <?php
            $data['button'] = [
              'tag' => 'a',
              'classes' => 'button_view_play-arch',
              'text' => 'PLAY ARCH',
              'href' => '#playmain'
            ];
            $ctx->theme->block('components/button/button', $data);
          ?>  
        </div>
      </div>  
      <div class="hero__cell hero__cell_main">
        <h2 class="hero__title a-pb-20">PIMPOPS</h2>
        <h2 class="hero__subtitle">html5-starter</h2>
      </div>  
      <div class="hero__cell">
        <!-- hero__group -->
        <div class="hero__group">
          <div class="hero__group-item hero__group-item_main">
            <div class="a-pb-35">
              <?php
                $data['link'] = [
                  'classes' => 'link_view_github',
                  'target' => '_blank',
                  'text' => 'GITHUB',
                  'icon' => 'blank-icon.svg',
                  'href' => 'https://github.com/pimpops'
                ];
                $ctx->theme->block('components/link/link', $data);
              ?>  
            </div>
            <div>
              <?php
                $data['select'] = [
                  'classes' => 'select_view_version'
                ];
                $ctx->theme->block('components/select/select', $data);
              ?>  
            </div>
          </div>
          <div class="hero__group-item">
            <div>
              <?php
                $data['button'] = [
                  'tag' => 'button',
                  'icon' => 'star-icon.svg',
                  'classes' => 'button_view_star',
                  'text' => '',
                ];
                $ctx->theme->block('components/button/button', $data);
              ?>  
            </div>
          </div>
        </div>
        <!-- END hero__group -->
      </div>  
    </div>
  </div>
  <div class="hero__bottom">
    <svg class="hero__bottom-curve" viewBox="0 0 100 4" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0 C 30 4, 70 4, 100 0" fill="transparent"/>
    </svg>
  </div>
</div>
