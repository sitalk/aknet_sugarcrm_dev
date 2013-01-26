<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('custom/include/cake.php');
require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
class SugarFieldSwitch extends SugarFieldBase {

    function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {

        if (!is_array($displayParams)) {
            $displayParams = array();
        }

        $cake = new Cake();
        $value = $vardef['value'];
        $displayParams['switch_name']= empty($value)? $value : $cake->getSwitchById($value);

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch($this->findTemplate('DetailView'));
    }
    
    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {

        if (!is_array($displayParams)) {
            $displayParams = array();
        }

        $cake = new Cake();
        $value = $vardef['value'];
        $displayParams['switch_id']= $value;
        $displayParams['switch_name']= empty($value)? $value : $cake->getSwitchById($value);
        $displayParams['switch_field'] = $vardef['name'];

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);        
        return $this->fetch($this->findTemplate('EditView'));      
    }

    function getListViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {

        if (!is_array($displayParams)) {
            $displayParams = array();
        }

        $cake = new Cake();
        $value = $parentFieldArray[$vardef['name']];
        $displayParams['switch_name']= empty($value)? $value : $cake->getSwitchById($value);

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch($this->findTemplate('ListView'));
    }
    
}
?>
