<?php
$module_name = 'Aknet_ServiceInternet';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tariff',
            'studio' => 'visible',
            'label' => 'LBL_TARIFF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_building',
            'label' => 'LBL_ADDRESS_BUILDING',
          ),
          1 => 
          array (
            'name' => 'address_appartment',
            'label' => 'LBL_ADDRESS_APPARTMENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'address_city',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'address_street',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_STREET',
          ),
        ),
      ),
    ),
  ),
);
?>
