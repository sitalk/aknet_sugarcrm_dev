<?php


    $customcode_file = "custom/include/EnhancedStudio/EnhancedStudio.php";
    $hook_array['process_record'][] = Array(3, 'ListView', $customcode_file,'CustomCode', 'evalCode');
    $hook_array['after_retrieve'][] = Array(4, 'DetailView', $customcode_file,'CustomCode', 'evalCode');

?>