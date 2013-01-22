<?php
$module_name = 'Aknet_House';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'JavaScript' => '<script type="text/JavaScript">{$JSON_CONFIG_JAVASCRIPT}</script>',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'address_street_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_STREET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'house_number_c',
            'label' => 'LBL_HOUSE_NUMBER',
          ),
        ),
      ),
    ),
  ),
);
?>
