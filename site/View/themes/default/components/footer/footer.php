<footer class="footer">
  <div class="g-container">
    <p class="footer__text">Created for the better web by 
      <?php
        $data['link'] = [
          'classes' => 'link_view_footer-github',
          'target' => '_blank',
          'text' => 'webuxmotion',
          'icon' => 'blank-icon-primary.svg',
          'href' => 'https://github.com/webuxmotion'
        ];
        $ctx->theme->block('components/link/link', $data);
      ?>
    </p> 
  </div>
</footer>
