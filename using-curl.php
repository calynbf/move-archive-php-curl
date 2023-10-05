<?php

ini_set('allow_url_fopen',1);
ini_set('memory_limit', '-1');

 $url  = 'http://oldsite.com/archive.zip';
 $upload_path = 'archive.zip'; 
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $con = curl_exec($ch);
 curl_close($ch);
 file_put_contents($upload_path, $con);
