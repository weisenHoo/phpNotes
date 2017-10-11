<?php
/*
 * 正则表达式_匹配边界2
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
//m只影响^$
$preg = "/\Ah\d+$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$preg = "/^h\d+\Z$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);





































?>