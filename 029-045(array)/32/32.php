<?php
header("Content-type: text/html; charset=utf-8");

/*
	in_array(); 判断内容是否在数组中
	array_search(); 查找内容是为数组的键值，存在返回键名，不存在返回BOOL假
	array_change_key_case(); 更改数组键名大小写
	array_chunk(); 把数组进行拆分
	array_combine(); 生成新数组
	array_diff(); 返回在其他数组中不存在的键值
	array_diff_key(); 返回在其他数组中不存在的键名
	array_diff_assoc(); 返回在其他数组中不存在的键名+键值
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr = array(1,2,3,4,5,6);
if(in_array('2',$arr,true)){
	echo "在数组中，存在值";
}else{
	echo "在数组中，不存在值";
}
*/

/*
$arr2 = array("url"=>"后盾网","class1"=>"PHP视频","class2"=>"DIV视频");
$k = array_search("后盾网222",$arr2);
//echo $k;
var_dump($k);
*/

/*
//$arr3 = array("url"=>"后盾网","class1"=>"PHP视频","class2"=>"DIV视频");
$arr3 = array("url"=>"后盾网","class1"=>"PHP视频","class2"=>"DIV视频","Class2"=>"dreamweaver课程");
dump($arr3);
$arr0 = array_change_key_case($arr3,CASE_UPPER);
dump($arr0);
*/

/*
$arr4 = array(
	"url"=>"后盾网",
	"class1"=>"PHP视频",
	"class2"=>"DIV视频",
	"class3"=>"dreamweaver课程",
	"class4"=>"mysql"
);
$arr0 = array_chunk($arr4,3,true);
dump($arr0);
*/

/*
$arr5a = array("url","webname","class");
$arr5b = array("BBS.HOUDUNWANG.COM","后盾网");
$arr0 = @array_combine($arr5a,$arr5b);
//dump($arr0);
var_dump($arr0);
*/

/*
$arr6a = array("houdunwnag.com","bbs.houdunwang.com","web.houdunwang.com");
$arr6b = array("sina.com.cn","bbs.houdunwang.com","web.houdunwang.com");
$c = array("sina.com.cn");
$arr0 = array_diff($arr6b,$arr6a,$c);
dump($arr0);
*/


$arr7a = array("url"=>"bbs.houdunwang.com1","name"=>"后盾网论坛");
$arr7b = array("weburl"=>"bbs.houdunwang.com","name"=>"后盾网论坛");
$arr7c = array("url"=>"bbs.houdunwang.com1");
//$arr0 = array_diff_key($arr7a,$arr7b);
$arr0 = array_diff_assoc($arr7a,$arr7b,$arr7c);
dump($arr0);















































?>