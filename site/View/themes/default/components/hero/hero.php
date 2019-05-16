<div class="hero">
  <div class="hero__top a-px-20">
    <div class="g-container hero__container">
      <div class="hero__cell">
        <div class="a-pb-35">
          <?php
            $data['link'] = [
              'classes' => 'link_view_read-docs',
              'text' => 'READ DOCS',
              'href' => '/docs/github/' . $playgroundData['author'] . '/' . $playgroundData['projectName'] 
            ];
            $ctx->theme->block('components/link/link', $data);
          ?>  
        </div>
        <div>
          <?php
            $data['button'] = [
              'tag' => 'a',
              'onClick' => 'app.scrollTo(\'playground\', event)',
              'classes' => 'button_view_play-arch',
              'text' => 'PLAY ARCH'
            ];
            $ctx->theme->block('components/button/button', $data);
          ?>  
        </div>
      </div>  
      <div class="hero__cell hero__cell_main">
      <h2 class="hero__title a-pb-20"><?=$playgroundData['author']?></h2>
        <h2 class="hero__subtitle"><?=$playgroundData['projectName']?></h2>
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
                  'href' => $playgroundData['githubLink']
                ];
                $ctx->theme->block('components/link/link', $data);
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
    <svg class="hero__bottom-curve" viewBox="0 0 100 3" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0 C 30 4, 70 4, 100 0" fill="transparent"/>
    </svg>
  </div>
</div>
