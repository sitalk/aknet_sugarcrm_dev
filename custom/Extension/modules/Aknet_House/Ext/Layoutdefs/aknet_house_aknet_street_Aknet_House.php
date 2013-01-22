<?php
 // created: 2012-12-05 15:02:20
$layout_defs["Aknet_House"]["subpanel_setup"]['aknet_house_aknet_street'] = array (
  'order' => 100,
  'module' => 'Aknet_Street',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AKNET_HOUSE_AKNET_STREET_FROM_AKNET_STREET_TITLE',
  'get_subpanel_data' => 'aknet_house_aknet_street',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
