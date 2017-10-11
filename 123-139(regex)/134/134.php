<?php
/*
 * 正则表达式_模式修正符（1）
 * 
 * i 不区分大小写模式的匹配
 * m 多行匹配内容
 * 模式修正符可以结合使用
 * s 将字符串视为单行，使.可以匹配到换行符
 * 
 * */

/*
$str = "www.houdunwang.com";
$preg = "/houdunWang/i";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<a href='http://www.baidu.com'>baidu.com</a>\n<a href='http://www.sina.com'>sina.com</a>";
echo $str;

$preg = "/^<a.*a>$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<div id='d1'>这是第1个div</div>\n<DIV id='d2'>这是第2个DIV</DIV>";
echo $str;

$preg = "/^<div .*>(.*?)<\/div>$/im";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "<div style='border: 1px solid #dcdcdc;width: 500px;height: 500px;'><p>这是第一段</p>\n<p>这是第二段</p></div>";
echo $str;

$preg = "/<div .*>(.*)<\/div>/s";
preg_match_all($preg, $str, $arr);
var_dump($arr);





























?>