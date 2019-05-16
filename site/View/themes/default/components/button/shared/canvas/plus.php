<?php
  $data['button'] = [
    'onClick' => isset($button['onClick']) ? $button['onClick'] : 'alert(\'Default\')',
    'classes' => isset($button['classes']) ? $button['classes'] : '',
    'attr' => [
      'data-scale' => 'plus'
    ],
    'icon' => 'plus-rounded.svg',
  ];
  $ctx->theme->block('components/button/shared/canvas/circled-control', $data);
?>  
