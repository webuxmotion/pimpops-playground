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
        'onClick' => 'treeItem.toggle(this);',
        'icon' => 'folder-icon.svg',
        'iconSecondary' => 'folder-opened-icon.svg',
        'classes' => 'tree-item_type_folder is-active',
        'text' => 'core'
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
          'text' => 'Provider'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <div class="tree__folder">
        <?php
          $data['treeItem'] = [
            'onClick' => 'treeItem.toggle(this);',
            'icon' => 'folder-icon.svg',
            'iconSecondary' => 'folder-opened-icon.svg',
            'classes' => 'tree-item_type_folder',
            'text' => 'Messenger'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
        <div class="tree__folder">
          <?php
            $data['treeItem'] = [
              'onClick' => $clickFunctions['messenger-provider-php'],
              'icon' => 'file-icon.svg',
              'classes' => 'tree-item_type_file',
              'text' => 'Provider.php'
            ];
            $ctx->theme->block('components/tree-item/tree-item', $data);
          ?>  
        </div>
        <?php
          $data['treeItem'] = [
            'onClick' => 'treeItem.toggle(this);',
            'icon' => 'folder-icon.svg',
            'iconSecondary' => 'folder-opened-icon.svg',
            'classes' => 'tree-item_type_folder',
            'text' => 'ContactBook'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
        <div class="tree__folder">
          <?php
            $data['treeItem'] = [
              'onClick' => $clickFunctions['contact-book-provider-php'],
              'icon' => 'file-icon.svg',
              'classes' => 'tree-item_type_file',
              'text' => 'Provider.php'
            ];
            $ctx->theme->block('components/tree-item/tree-item', $data);
          ?>  
        </div>
        <?php
          $data['treeItem'] = [
            'onClick' => $clickFunctions['abstract-provider-php'],
            'icon' => 'file-icon.svg',
            'classes' => 'tree-item_type_file',
            'text' => 'AbstractProvider.php'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
        <?php
          $data['treeItem'] = [
            'onClick' => $clickFunctions['provider-list-php'],
            'icon' => 'file-icon.svg',
            'classes' => 'tree-item_type_file',
            'text' => 'providerList.php'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
      </div>
      <?php $data['treeItem'] = [
          'onClick' => 'treeItem.toggle(this);',
          'icon' => 'folder-icon.svg',
          'iconSecondary' => 'folder-opened-icon.svg',
          'classes' => 'tree-item_type_folder',
          'text' => 'Worker'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <div class="tree__folder">
        <?php $data['treeItem'] = [
            'onClick' => 'treeItem.toggle(this);',
            'icon' => 'folder-icon.svg',
            'iconSecondary' => 'folder-opened-icon.svg',
            'classes' => 'tree-item_type_folder',
            'text' => 'Messenger'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
        <div class="tree__folder">
          <?php
            $data['treeItem'] = [
              'onClick' => $clickFunctions['messenger-php'],
              'icon' => 'file-icon.svg',
              'classes' => 'tree-item_type_file',
              'text' => 'Messenger.php'
            ];
            $ctx->theme->block('components/tree-item/tree-item', $data);
          ?>  
        </div>
        <?php $data['treeItem'] = [
            'onClick' => 'treeItem.toggle(this);',
            'icon' => 'folder-icon.svg',
            'iconSecondary' => 'folder-opened-icon.svg',
            'classes' => 'tree-item_type_folder',
            'text' => 'ContactBook'
          ];
          $ctx->theme->block('components/tree-item/tree-item', $data);
        ?>  
        <div class="tree__folder">
          <?php
            $data['treeItem'] = [
              'onClick' => $clickFunctions['contact-book-php'],
              'icon' => 'file-icon.svg',
              'classes' => 'tree-item_type_file',
              'text' => 'ContactBook.php'
            ];
            $ctx->theme->block('components/tree-item/tree-item', $data);
          ?>  
        </div>
      </div>
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['bootstrap-php'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'bootstrap.php'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['di-php'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'DI.php'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
      <?php
        $data['treeItem'] = [
          'onClick' => $clickFunctions['starter-php'],
          'icon' => 'file-icon.svg',
          'classes' => 'tree-item_type_file',
          'text' => 'Starter.php'
        ];
        $ctx->theme->block('components/tree-item/tree-item', $data);
      ?>  
    </div>
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['index-php'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'index.php'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
    <?php
      $data['treeItem'] = [
        'onClick' => $clickFunctions['composer-json'],
        'icon' => 'file-icon.svg',
        'classes' => 'tree-item_type_file',
        'text' => 'composer.json'
      ];
      $ctx->theme->block('components/tree-item/tree-item', $data);
    ?>  
  </div>
</div>
