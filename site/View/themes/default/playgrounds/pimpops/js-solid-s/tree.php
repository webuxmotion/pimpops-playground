<div class="tree">
  <?php
    $data['treeItem'] = [
      'onClick' => 'treeItem.toggle(this);',
      'icon' => 'folder-icon.svg',
      'iconSecondary' => 'folder-opened-icon.svg',
      'classes' => 'tree-item_type_folder is-active',
      'text' => 'js-solid-s'
    ];
    $ctx->theme->block('components/tree-item/tree-item', $data);
  ?>  
  <div class="tree__folder is-active">
    <?php
      $data['treeItem'] = [
        'onClick' => 'treeItem.toggle(this);',
        'icon' => 'folder-icon.svg',
        'iconSecondary' => 'folder-opened-icon.svg',
        'classes' => 'tree-item_type_folder',
        'text' => 'dist'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <div class="tree__folder">
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['bundle-js'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'bundle.js'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['bundle-js-map'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'bundle.js.map'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    </div>
    <?php
      $data['treeItem'] = [
        'onClick' => 'treeItem.toggle(this);',
        'icon' => 'folder-icon.svg',
        'iconSecondary' => 'folder-opened-icon.svg',
        'classes' => 'tree-item_type_folder is-active',
        'text' => 'src'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <div class="tree__folder is-active">
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['index-js'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'index.js'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['shapes-js'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'shapes.js'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['area-calculator-js'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'areaCalculator.js'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['area-oputter-js'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'areaOputter.js'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
    </div>
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['index-html'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'index.html'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['webpack-config-js'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'webpack.config.js'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['package-json'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'package.json'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
  </div>
</div>
