<?php
/*
 * 
 * 
 * */
 
 
$sessionId = $_POST['sid'];
session_id($sessionId);
session_start();

echo session_id();
var_dump($_SESSION);







































?>