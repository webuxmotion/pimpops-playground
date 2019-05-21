<?php
  $classes = (isset($form['classes']) ? $form['classes'] : '');
  $data['form'] = [
    'classes' => $classes,
    'formdata' => [
      'name' => [
        'classes' => 'a-px-20',
        'element' => 'input',
        'value' => '',
        'config' => [
          'name' => 'name',
          'type' => 'text',
          'placeholder' => 'Enter your name'
        ]
      ],  
      'email' => [
        'classes' => 'a-px-20',
        'element' => 'input',
        'value' => '',
        'config' => [
          'name' => 'name',
          'type' => 'text',
          'placeholder' => 'Enter your name'
        ]
      ]  
    ]
  ];
  $ctx->theme->block('components/form/form', $data);
?>  

