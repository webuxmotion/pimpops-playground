<footer class="footer">
  <div class="g-container">
    <p class="footer__text">Created for the better web by 
      <?php
        $data['link'] = [
          'classes' => 'link_view_default-link',
          'text' => 'Pimpops Team',
          'href' => '/team'
        ];
        $ctx->theme->block('components/link/link', $data);
      ?>
    </p> 
  </div>
</footer>
