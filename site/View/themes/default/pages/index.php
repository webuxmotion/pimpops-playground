<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<!-- load playgound data -->
<?php $this->theme->block('playgrounds/pimpops/' . $id . '/static'); ?>
<?php 
  $data['playgroundData'] = $this->theme->playgroundData('pimpops/' . $id . '/data'); 
  $data['playgroundData']['id'] = $id;
?>

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
<?php $this->theme->block('components/footer/footer', $data); ?>
<script src="<?=app()?>/app.js"></script>
<script>
  canvas.show('cards');
</script>
<?php $this->theme->foot(); ?>
