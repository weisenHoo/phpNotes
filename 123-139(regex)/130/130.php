<?php
/*
 * ������ʽ_̰��ƥ�����ֹ̰��
 * 
 * */

/*
$str = "<a href='http://www.baidu.com' style='display: none;'>�ٶ�</a>&nbsp;&nbsp;&nbsp;<a href='http://taobao.com'>�Ա�</a>";
$preg = "/href='(.*?)'/is";
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);
*/

/*
//$class = include "class.php";
$class = file_get_contents("class.php");

$preg = "/\/\*.*?\*\//is";
$data = preg_replace($preg, '', $class);

file_put_contents("class1.php", $data);
*/


$a = "cbaaaa";
$preg = "/ba*?/is";
preg_match($preg, $a, $arr);
var_dump($arr);







































?>