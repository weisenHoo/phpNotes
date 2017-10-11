<?php
/*
 * 
 * 
 * */

session_save_path("2;./tmp");
session_start();
echo session_id();

echo "<pre>";
print_r($_SESSION);




































?>