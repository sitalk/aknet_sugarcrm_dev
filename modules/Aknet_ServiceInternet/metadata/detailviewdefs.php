<?php
$module_name = 'Aknet_ServiceInternet';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_state',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_STATE',
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
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_STREET',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'address_building',
            'label' => 'LBL_ADDRESS_BUILDING',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address_appartment',
            'label' => 'LBL_ADDRESS_APPARTMENT',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tariff',
            'studio' => 'visible',
            'label' => 'LBL_TARIFF',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'switch_id',
            'label' => 'LBL_SWITCH_ID',
          ),
          1 => 
          array (
            'name' => 'port',
            'label' => 'LBL_PORT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'connection_price',
            'label' => 'LBL_CONNECTION_PRICE',
          ),
          1 => 
          array (
            'name' => 'service_internet_status',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE_INTERNET_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'comment',
            'studio' => 'visible',
            'label' => 'LBL_COMMENT',
          ),
        ),
      ),
    ),
  ),
);
?>
