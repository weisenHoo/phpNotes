<?php
header("Content-type: text/html; charset=utf-8");

/*
	implode(); 把数组合成字符串
	explode(); 把字符串分割成数组
	in_array(); 检测内容是否在数组中
	each(); 把数组元素拆分成新的数组
	list(); 把数组元素赋值给变量
*/

$arr = array("PHP课程","DIVCSS课程","JQUERY","JAVASCRIPT");
$str = implode(",",$arr);
echo $str;


$arr2 = explode(",",$str);
echo "<br/>";
echo "<pre>";
print_r($arr2);


$arr3 = array(1,2,3,4,5);
var_dump(in_array('1',$arr3,TRUE));


$arr4 = array(
	"url"=>"bbs,houdunwang.com",
	"webname"=>"后盾网论坛"
);
$arr4_1 = each($arr4);
print_r($arr4_1);
$arr4_1 = each($arr4);
print_r($arr4_1);
$arr4_1 = each($arr4);
var_dump($arr4_1);


$arr5 = array("bbs.houdunwang.com","后盾网视频教程");
list($url,$webname) = $arr5;
echo $url,$webname;

echo "<br/>";

$arr5_1 = array(
	"url"=>"bbs.houdunwang.com",
	"webname"=>"后盾网视频教程",
	"class1"=>"PHP",
	"class2"=>"DIV+CSS"
);
while(list($k,$v) = each($arr5_1)){
	echo $k.":".$v."<br/>";
}































































?>