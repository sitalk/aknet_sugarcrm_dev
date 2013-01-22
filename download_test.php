<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
$url  = 'http://www.sugarforge.org/frs/download.php/9909/SugarCE-6.5.9.zip';

    $path = '/SugarCE-6.5.9.zip';
 
    $fp = fopen($path, 'w');
 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FILE, $fp);
 
    $data = curl_exec($ch);
 
    curl_close($ch);
    fclose($fp);

    if (!$data) 
    {
        echo "<br />cURL error number:" .curl_errno($ch);
        echo "<br />cURL error:" . curl_error($ch);
        exit;
    } 
    
    
 ?>