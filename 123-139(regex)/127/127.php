<?php
/*
 * ������ʽ_�ظ�ƥ��1
 * 
 * */

/*
$str = "�����http://www.houdunwang.com �ٶ���http://www.baidu.com �Ա���http://www.taobao.cpm";

$preg = "/\.\w*\./is";

$static = preg_match_all($preg, $str, $arr, PREG_SET_ORDER);

//echo $static?"ƥ��ɹ�":"EROOR";

//var_dump($arr);

if($static){
	echo "ƥ��ɹ�<br/>";
	var_dump($arr);	
}else{
	echo "EROOR";
}
*/


$str = file_get_contents("demo.php");
$preg = "/(\/\*+)(.*?)(\*\/)/is";
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);


$data = preg_replace($preg, "\\1 \r\n * �����http://bbs.houdunwang.com \\2 \\3 ", $str);
file_put_contents("demo1.php", $data);































?>