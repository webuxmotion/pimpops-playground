<?php $this->theme->head(); ?>

<?php $data['ctx'] = $this;
      $this->theme->block('components/header/header', $data); ?>
<?php $data['ctx'] = $this;
      $this->theme->block('components/hero/hero', $data); ?>

<?php $this->theme->foot(); ?>
