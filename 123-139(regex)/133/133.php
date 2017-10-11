<?php
/*
 * 正则表达式_断言匹配
 * 
 * */

/*
$str = "www.houdunwang.com";
$preg = "/(?<=www\.).*(?=\.com)/is";
preg_match($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "php python pear";
//$preg = "/\b\w+\b/is";
$preg = "/\bp(?!h)\w+\b/is";//截取p后面不是h的字符
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "@houdunwang.com@taobao.com@sina.com@sohu.com#yahoo.com#";
$preg = "/(?<=[@,#]).*?(?=[@,#])/is";
preg_match_all($preg, $str, $arr);
var_dump($arr);


































?>