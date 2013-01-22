<?php
$module_name = 'Aknet_ServiceInternet';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ADDRESS_STREET' => 
  array (
    'type' => 'dictionary',
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_STREET',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_BUILDING' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_BUILDING',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_APPARTMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_APPARTMENT',
    'width' => '10%',
    'default' => true,
  ),
  'SWITCH_ID' => 
  array (
    'type' => 'switch',
    'studio' => 'visible',
    'label' => 'LBL_SWITCH_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PORT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PORT',
    'width' => '10%',
    'default' => true,
  ),
  'TARIFF' => 
  array (
    'type' => 'dictionary',
    'studio' => 'visible',
    'label' => 'LBL_TARIFF',
    'width' => '10%',
    'default' => true,
  ),
  'SERVICE_INTERNET_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SERVICE_INTERNET_STATUS',
    'width' => '10%',
  ),
);
?>
