<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2008 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 * *******************************************************************************/



/*******************************************************************************
 * Additional code developed by:
 *  
 * Dispage - Patrizio Gelosi
 * Via A. De Gasperi 91 
 * P. Potenza Picena (MC) - Italy
 * 
 * (Hereby referred to as "DISPAGE")
 * 
 * Copyright (c) 2010-2012 DISPAGE.
 * 
 * 
 * This file has been modified as part of the "Enhanced Studio" project.
 ******************************************************************************/

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldCode extends SugarFieldBase {
   
        function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
                $vardef['value'] = $this->getVardefValue($vardef);

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch('custom/include/SugarFields/Fields/Code/DetailView.tpl');
    }

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
                $vardef['value'] = $this->getVardefValue($vardef);
                                
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch('custom/include/SugarFields/Fields/Code/DetailView.tpl');
    }
    
    function getVardefValue($vardef){
        $code = $vardef['value'];
        if(empty($code)){
                        if(!empty($vardef['default']))
                                $code = $vardef['default'];
                        elseif(!empty($vardef['default_value']))
                                $code = $vardef['default_value'];
                }
        return $code;
    }
}
?>
