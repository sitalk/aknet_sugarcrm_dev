<?php
$module_name = 'Aknet_PrivateLeads';
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
        'LBL_CONTACT_INFORMATION' => 
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
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 'last_name',
          1 => 'phone_home',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'middle_name',
            'label' => 'LBL_MIDDLE_NAME',
          ),
          1 => 'phone_other',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_street',
            'label' => 'LBL_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'house_number',
            'label' => 'LBL_HOUSE_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address_commentary',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_COMMENTARY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'private_lead_source',
            'studio' => 'visible',
            'label' => 'LBL_PRIVATE_LEAD_SOURCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status_description',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'pr_lead_source_description',
            'studio' => 'visible',
            'label' => 'LBL_PR_LEAD_SOURCE_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_commentary',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_COMMENTARY',
          ),
        ),
      ),
    ),
  ),
);
?>
