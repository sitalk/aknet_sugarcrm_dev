<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/DynamicFields/templates/Fields/TemplateText.php');

class TemplateDictionary extends TemplateText
{ 
    var $type='dictionary';
    var $reportable = false;
    var $importable = 'false'; 

	function TemplateDictionary(){
	    $this->vardef_map['module_name_input']=$_REQUEST['module_name_input'];
		$this->vardef_map['table']='ext1';
		$this->vardef_map['id_column']='ext2';
		$this->vardef_map['name_column']='ext3';
        
	}

    function get_field_def()
    {
        $def = parent::get_field_def();

        $def['dbType'] = 'varchar';
        $def['massupdate'] = 0;
        $def['importable'] = 0;
        $def['duplicate_merge'] = 0;
        $def['reportable'] = 0;
        $def['studio'] = 'visible';
        $def['ext1']=$this->ext1;
        $def['ext2']=$this->ext2;
        $def['ext3']=$this->ext3;
        $def['module_name_input']=$this->module_name_input;
        

        return array_merge($def, $this->get_additional_defs());
    } 

    function save($df) {
		parent::save($df);
    }
}
