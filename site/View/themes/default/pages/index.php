<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>

<?php $this->theme->block('components/header/header', $data); ?>
<?php $this->theme->block('components/hero/hero', $data); ?>
<?php $this->theme->block('components/mega/mega', $data); ?>
<?php 
  $data['pg'] = [
    'attr' => [
      'data-scrollto' => 'playground'
    ] 
  ];
  $this->theme->block('components/pg/pg', $data); ?>
<?php $this->theme->block('components/modal/variant/demo-canvas', $data); ?>

<?php $this->theme->foot(); ?>
