<?php
/*
	usort(); 通过自定义函数对数组进行排序，原数组索引不保留
	uasort(); 通过自定义函数对数组进行排序，保留原数组组索引
	uksort(); 通过调用自定义函数对数组的键名进行排序
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

//$arr = array('5'=>5,'3'=>3,'7'=>7,'6'=>6,'4'=>4,'1'=>1,'2'=>2);
$arr = array('9'=>5,'20'=>3,'2'=>7,'7'=>6);
/*
function a($v1,$v2){
	if($v1==$v2) return 0;
	return $v1>$v2?1:-1;
}
var_dump(usort($arr,"a"));
dump($arr);

function a($v1,$v2){
	if($v1==$v2) return 0;
	return $v1>$v2?1:-1;
}
var_dump(uasort($arr,"a"));
dump($arr);
*/
function a($v1,$v2){
	if($v1==$v2) return 0;
	return $v1>$v2?1:-1;
}
var_dump(uksort($arr,"a"));
dump($arr);































?>