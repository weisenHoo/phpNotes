<?php
/*
 * �������OOP˼��ʵ��ͼ����֤��
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