<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'BusinessLeads push feed', 'modules/Aknet_BusinessLeads/SugarFeeds/BusinessLeadFeed.php','BusinessLeadFeed', 'pushFeed'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'SyncServices', 'custom/modules/Aknet_BusinessLeads/Hooks.php','Aknet_BusinessLeads_Hooks', 'syncServices'); 



?>