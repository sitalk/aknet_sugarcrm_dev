<?php

$hook_array = Array();
$hook_version = 1;

$hook_array['after_save'][] = Array(1, Concatenate, 'custom/modules/Aknet_House/concatenate_fields.php', 'concatenateFields', 'concatenate'); 

?>