<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['playgroundData'] = $this->theme->playgroundData('pimpops/' . $id . '/data'); 
  $data['playgroundData']['id'] = $id;
?>
<?php 
  $data['pageTitle'] = [
    "text" => "DOCS | " . $data['playgroundData']['author'] . "/" . $data['playgroundData']['projectName']
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>

<?php $this->theme->block('playgrounds/pimpops/' . $data['playgroundData']['id'] . '/docs', $data); ?>

<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
