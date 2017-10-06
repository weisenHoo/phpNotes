<?php
/*
session_start();
//print_r($_SESSION['arr1']);
$arr2 = unserialize($_SESSION['arr1']);
print_r($arr2);
*/

session_start();
include "59.php";
echo "<pre>";
//print_r($_SESSION['channel_obj']);
$channel_obj = unserialize($_SESSION['channel_obj']);
$channel_obj->select();
?>