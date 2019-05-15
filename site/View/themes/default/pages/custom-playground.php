<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
Custom playground
<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
