<?php
$module_name = 'Aknet_PrivateLeads';
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
          3 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_CONVERT_BUTTON_TITLE}" class="button" onclick="this.form.return_module.value=\'Aknet_PrivateLeads\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\';this.form.module.value=\'Contacts\';this.form.action.value=\'EditView\';" type="submit" name="CONVERT_LEAD_BTN" value="{$MOD.LBL_CONVERT_BUTTON_LABEL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => 'Convert',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'name' => 'CONVERT_LEAD_BTN',
                'id' => 'convert_target_button',
                'title' => '{$MOD.LBL_CONVERT_BUTTON_TITLE}',
                'onclick' => 'this.form.return_module.value=\'Aknet_PrivateLeads\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\';this.form.module.value=\'Contacts\';this.form.action.value=\'EditView\';',
              ),
            ),
          ),
          4 => 'FIND_DUPLICATES',
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'full_name',
          1 => 'phone_home',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
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
            'name' => 'pl_address_street_c',
            'studio' => 'visible',
            'label' => 'LBL_PL_ADDRESS_STREET',
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
            'name' => 'pl_alternative_address_c',
            'studio' => 'visible',
            'label' => 'LBL_PL_ALTERNATIVE_ADDRESS',
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
      'lbl_detailview_panel1' => 
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
