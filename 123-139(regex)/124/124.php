<?php
/*
 * 正则表达式_原子表
 * 
 * */

$str = "后盾网论坛 网址：http://bbs.houdunwang.com 2017-6-16";

echo preg_match("/\.com[^\d]/is", $str ,$arr)?'yes':'no';
var_dump($arr);

























?>