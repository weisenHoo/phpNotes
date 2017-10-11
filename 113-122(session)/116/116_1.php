<?php
/*
 * 
 * 
 * */
 
/*
$sessionId = isset($_COOKIE[session_name()])?$_COOKIE[session_name()]:$_GET['sid'];

session_id($sessionId);

session_start();

echo session_id();
var_dump($_SESSION);
*/


$sessionId = $_GET['PHPSESSID'];

session_id($sessionId);

session_start();

echo session_id();
var_dump($_SESSION);



































?>