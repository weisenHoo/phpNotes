<?php
/*
 * 面向对像OOP思想实现图形验证码
 * 
 * */

function __autoload($classname){
	include $classname.'.php';
}

$code = new checkcode();
$code->bg_color = "#222222";
$code->font_color = "#ffffff";
$code->getimage();

session_start();
$_SESSION['code'] = $code->getcode();






































?>