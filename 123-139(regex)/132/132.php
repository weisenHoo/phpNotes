<?php
/*
 * ������ʽ_ƥ��߽�2
 * 
 * */


$str = "h1111\nh2222\nh333\n";
//echo $str;
/*
$preg = "/^h\d+$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
//mֻӰ��^$
$preg = "/\Ah\d+$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$preg = "/^h\d+\Z$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);





































?>