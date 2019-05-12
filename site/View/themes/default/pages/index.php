<?php $this->theme->head(); ?>
<?php $data['ctx'] = $this; ?>

<?php $this->theme->block('components/header/header', $data); ?>
<?php $this->theme->block('components/hero/hero', $data); ?>
<?php $this->theme->block('components/mega/mega', $data); ?>

<?php $this->theme->foot(); ?>
