<?php
  $classes = (isset($form['classes']) ? $form['classes'] : '');
  $data['form'] = [
    'classes' => $classes,
    'onSubmit' => "form.sendContactMessage(event,this);",
    'button' => [
      'tag' => 'button',
      'classes' => 'button_view_play-arch',
      'text' => 'Send message'
    ],
    'formdata' => [
      'email' => [
        'classes' => 'a-px-20',
        'element' => 'input',
        'label' => 'Email',
        'value' => '',
        'config' => [
          'id' => 'email_field',
          'name' => 'email',
          'type' => 'email',
          'placeholder' => 'Enter email',
          'required' => 'true'
        ]
      ],  
      'message' => [
        'classes' => 'a-px-20',
        'element' => 'textarea',
        'label' => 'Message',
        'value' => '',
        'config' => [
          'id' => 'textarea_field',
          'name' => 'message',
          'placeholder' => 'Message',
          'required' => 'true'
        ]
      ]  
    ]
  ];
  $ctx->theme->block('components/form/form', $data);
?>  

