<?php
  $classes = 'button_view_canvas-circled ' . (isset($button['classes']) ? $button['classes'] : '');
  $data['button'] = [
    'tag' => 'button',
    'onClick' => isset($button['onClick']) ? $button['onClick'] : 'alert(\'Default\')',
    'icon' => isset($button['icon']) ? $button['icon'] : 'close-black-icon.svg',
    'classes' => $classes,
    'attr' => isset($button['attr']) ? $button['attr'] : [],
    'text' => '',
  ];
  $ctx->theme->block('components/button/button', $data);
?>  
