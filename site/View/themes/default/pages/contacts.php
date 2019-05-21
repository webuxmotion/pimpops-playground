<?php $data['ctx'] = $this; ?>
<?php $this->theme->head(); ?>
<?php $this->theme->block('components/header/header', $data); ?>
<?php 
  $data['pageTitle'] = [
    "text" => "Contact Us"
  ];
  $this->theme->block('components/page-title/page-title', $data); 
?>
<?php $this->theme->block('components/contacts/contacts', $data); ?>
<?php $this->theme->block('components/map/map'); ?>

<?php $this->theme->block('components/footer/footer', $data); ?>
<?php $this->theme->foot(); ?>
