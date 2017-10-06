<?php
header("Content-type: text/html; charset=utf-8");

/*
	array_udiff(); 通过回调函数的方式，比较两个或多个数组的差值，只比较值，不进行键名的比较
	array_udiff_assoc(); 通过回调函数的方式，比较两个或多个数组的键名和键值的差值
	array_udiff_uassoc(); 通过回调函数的方式，比较多个数组的键名和键值,要定义两个回调函数来处理键名和键值的比较
	array_uintersect(); 通过回调函数的方式，得到多个数组中键值的交集，键名不会参与比较
	array_uintersect_assoc(); 通过回调函数的方式，得到多个数组中键名和键值的交集
	array_uintersect_uassoc(); 通过回调函数的方式，得到多个数组中键名和键值的交集,要定义两个回调函数来处理键名和键值的比较
	
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}


$arr1 = array("a"=>"a","b"=>"b","c"=>"c");
$arr2 = array("a"=>"a","b"=>"b","c"=>"c","d"=>"d");
function a($k1,$k2){
	if($k1===$k2){
		return 0;
	}elseif($k1>$k2){
		return 1;
	}else{
		return -1;
	}
}
function b($k1,$k2){
	if($k1===$k2){
		return 0;
	}elseif($k1>$k2){
		return 1;
	}else{
		return -1;
	}
}
//$arr0 = array_udiff($arr1,$arr2,"a");
//$arr0 = array_udiff_assoc($arr1,$arr2,"a");
//$arr0 = array_udiff_uassoc($arr1,$arr2,"a","b");
//$arr0 = array_uintersect($arr1,$arr2,"a");
//$arr0 = array_uintersect_assoc($arr1,$arr2,"a");
//$arr0 = array_uintersect_uassoc($arr1,$arr2,"a","b");
$arr0 = array_uintersect_uassoc($arr1,$arr2,"a","b");

dump($arr0);




























?>