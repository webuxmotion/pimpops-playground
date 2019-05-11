<?php $this->theme->head(); ?>

<?php $data['ctx'] = $this;
      $this->theme->block('components/header/header', $data); ?>

<?php $data['ctx'] = $this;
      $this->theme->block('components/c404/c404', $data); ?>

<?php $this->theme->foot(); ?>
