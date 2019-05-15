<div class="tree">
  <?php
    $data['treeItem'] = [
      'onClick' => 'treeItem.toggle(this);',
      'icon' => 'folder-icon.svg',
      'iconSecondary' => 'folder-opened-icon.svg',
      'classes' => 'tree-item_type_folder is-active',
      'text' => 'project'
    ];
    $ctx->theme->block('components/tree-item/tree-item', $data);
  ?>  
  <div class="tree__folder is-active">
    <?php
      $data['treeItem'] = [
        'onClick' => 'canvas.showFile(\'index\', canvas.showFromDemoCanvas);',
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'index.html'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => 'canvas.showFile(\'styles\', canvas.showFromDemoCanvas);',
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'styles.css'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => 'canvas.showFile(\'app\', canvas.showFromDemoCanvas);',
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'app.js'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
  </div>
</div>
