<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$str = file_get_contents('presidents.json');
$json = json_decode($str, true);
$json1 = array_reverse($json, false);


