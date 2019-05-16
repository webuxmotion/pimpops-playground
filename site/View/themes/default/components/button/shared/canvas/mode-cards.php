<?php
  $data['button'] = [
    'onClick' => isset($button['onClick']) ? $button['onClick'] : 'alert(\'Default\')',
    'classes' => isset($button['classes']) ? $button['classes'] : '',
    'attr' => [
      'data-mode' => 'cards'
    ],
    'icon' => 'cards-mode.svg',
  ];
  $ctx->theme->block('components/button/shared/canvas/circled-control', $data);
?>  
