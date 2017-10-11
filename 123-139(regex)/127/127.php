<?php
/*
 * 正则表达式_重复匹配1
 * 
 * */

/*
$str = "后盾网http://www.houdunwang.com 百度网http://www.baidu.com 淘宝网http://www.taobao.cpm";

$preg = "/\.\w*\./is";

$static = preg_match_all($preg, $str, $arr, PREG_SET_ORDER);

//echo $static?"匹配成功":"EROOR";

//var_dump($arr);

if($static){
	echo "匹配成功<br/>";
	var_dump($arr);	
}else{
	echo "EROOR";
}
*/


$str = file_get_contents("demo.php");
$preg = "/(\/\*+)(.*?)(\*\/)/is";
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);


$data = preg_replace($preg, "\\1 \r\n * 后盾网http://bbs.houdunwang.com \\2 \\3 ", $str);
file_put_contents("demo1.php", $data);































?>