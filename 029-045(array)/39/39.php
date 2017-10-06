<?php
header("Content-type: text/html; charset=utf-8");

/*
	array_merge(); 将多个数组合并，生产新数组
	array_merge_recursive(); 将多个数组进行合并，如果xi键名相同，生产二维数组
	array_change_key_case();
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr1 = array("weburl"=>"bbs.houdunwnag.com","webname"=>"后盾网");
$arr2 = array("db_hot"=>"localhost","db_url"=>"root","db_name"=>"hdw");
$config = array_merge($arr1,$arr2);
dump($config);
*/

/*
$arr1 = array("weburl"=>"bbs.houdunwnag.com","webname"=>"后盾网论坛","webadmin"=>"admin");
$arr2 = array("weburl"=>"www.houdunwnag.com","webname"=>"后盾网官网");
dump(array_merge($arr1,$arr2));
dump(array_merge_recursive($arr1,$arr2));
*/

$config = array("WEBNAME"=>"后盾网","weburl"=>"bbs.houdunwang.com");
//dump(array_change_key_case($config,CASE_UPPER));
dump(array_change_key_case($config,CASE_LOWER));


















?>