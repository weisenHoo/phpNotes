<?php
/*
 * 正则表达式_函数使用
 * 
 * preg_match 
 * preg_match_all
 * 
 * */


$str = "houdunwang.com";
$preg = "/u/is";
//preg_match($preg, $str, $arr);
preg_match_all($preg, $str, $arr, PREG_OFFSET_CAPTURE);
var_dump($arr);















































?>