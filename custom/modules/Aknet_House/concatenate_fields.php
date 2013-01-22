<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class concatenateFields{
    public function concatenate(&$bean, $event, $arguments){
        global $mod_strings;
        $query = "SELECT name FROM `aknet_street` WHERE id = '$bean->address_street_c'";        
        $result = $GLOBALS['db']->query($query, false); 
        if (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
            $bean->name = sprintf($mod_strings['LBL_HOUSE_ABBREVIATION'],$row['name'],$bean->house_number_c);       
            $bean->save();
        }
    }
}
