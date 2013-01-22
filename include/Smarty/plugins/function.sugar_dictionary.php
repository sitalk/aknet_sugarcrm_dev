<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {sugar_dictionary} function plugin
 *
 * Type:     function<br>
 * Name:     sugar_dictionary<br>
 * Purpose:  
 */

function smarty_function_sugar_dictionary($params, &$smarty)
{
    $name = "";
    $query = "SELECT {$params['nameField']} FROM {$params['table']} 
        WHERE {$params['idField']}='{$params['value']}'";
    $result = $GLOBALS['db']->query($query, false);

    if (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
        return $row['name'];
    }
    return "";
    //$smarty->assign('dictionary_value', $name);
	
}
?>
