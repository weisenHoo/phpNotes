<?php
/*
 * 正则表达式_匹配边界
 * 
 * */

/*
$str = "66";
$preg = "/^-?\d+$/is";
preg_match($preg, $str, $arr);
var_dump($arr);
*/


$str = "hello word my name is weisen";
$preg = "/\bword\b/is";

preg_match($preg, $str, $arr);
var_dump($arr);






































?>