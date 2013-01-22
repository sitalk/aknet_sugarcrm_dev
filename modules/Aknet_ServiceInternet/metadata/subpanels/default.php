<?php
$module_name='Aknet_ServiceInternet';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Aknet_ServiceInternet',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),
    'address_street' => 
    array (
      'type' => 'dictionary',
      'studio' => 'visible',
      'vname' => 'LBL_ADDRESS_STREET',
      'width' => '15%',
      'default' => true,
    ),
    'address_building' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS_BUILDING',
      'width' => '10%',
      'default' => true,
    ),
    'address_appartment' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS_APPARTMENT',
      'width' => '5%',
      'default' => true,
    ),
    'tariff' => 
    array (
      'type' => 'dictionary',
      'studio' => 'visible',
      'vname' => 'LBL_TARIFF',
      'width' => '10%',
      'default' => true,
    ),
    'service_internet_status' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SERVICE_INTERNET_STATUS',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Aknet_ServiceInternet',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Aknet_ServiceInternet',
      'width' => '5%',
      'default' => true,
    ),
  ),
);