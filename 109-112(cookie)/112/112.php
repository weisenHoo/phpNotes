<?php
/*
 * ͨ��COOKIEʵ���û���¼
 * 
 * */


function __autoload($classname){
	$classfile = $classname.".class.php";
	file_exists($classfile)?include $classfile:die("���ļ�������");
}

$action = isset($_GET['a'])?$_GET['a']:"index";
$model = isset($_GET['m'])?$_GET['m']:"user";
$class = $model."Action";
$m = new $class();
$m->$action();






































?>