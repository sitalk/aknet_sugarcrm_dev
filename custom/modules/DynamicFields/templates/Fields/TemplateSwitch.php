<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/DynamicFields/templates/Fields/TemplateText.php');

class TemplateSwitch extends TemplateText
{ 
    var $type='switch';
    var $reportable = false;
    var $importable = 'false'; 

    function get_field_def()
    {
        $def = parent::get_field_def();

        $def['dbType'] = 'integer';
        $def['massupdate'] = 0;
        $def['importable'] = 0;
        $def['duplicate_merge'] = 0;
        $def['reportable'] = 0;
        $def['studio'] = 'visible';
        return $def;
    } 
}
