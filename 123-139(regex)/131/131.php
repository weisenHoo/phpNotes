<?php
/*
 * ������ʽ_ƥ��߽�
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