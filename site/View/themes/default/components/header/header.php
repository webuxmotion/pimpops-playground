<header class="header a-px-20">
  <div class="g-container header__container">
    <div class="header__cell">
      <?php $data = [];
            $ctx->theme->block('components/logo/logo', $data); ?>
    </div>
    <div class="header__cell header__cell_nav">
      <?php $data = [];
            $ctx->theme->block('components/nav/nav', $data); ?>
    </div>
  </div>
</header>
