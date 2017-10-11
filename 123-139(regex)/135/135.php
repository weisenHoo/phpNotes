<?php
/*
 * 正则表达式_模式修正符（2）
 * 
 * x 模式中的空白忽略不计
 * U 匹配最近的字符串内容，禁止贪婪匹配
 * A 强制从字符串开始计算
 * D 设置$符号仅匹配到目标字符串的结尾 设置m模式修正符后失效
 * e 将替换字符串作为表达式来使用
 * 
 * */

/*
$str = "http://www.houdunwang.com";
$preg = "/hou dunwang.com/x";
preg_match($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<div>后盾网：www.houdunwang.com</div><div>百度：www.baidu.com</div>";
$preg = "/<div>(.*)<\/div>/U";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<h1>后盾网视频教程人人做后盾</h1>\n<h1>百度搜索引擎</h1>";
$preg = "/^<h1>(.*)<\/h1>/AUim";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "houdunwang.com\n";
$preg = "/.com$/Dm";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "<p>北京<a href='http://www.baidu.com'>百度搜索引擎</a></p>
		<h1><a href='http://www.ku6.com'>酷6</a>视频网站</h1>";
echo $str;

$preg = "/<a\s+href=(('|\").*\\2)>.*<\/a>/Uise";
preg_match_all($preg, $str, $arr);
var_dump($arr);

echo preg_replace($preg, "str_replace('\\1', '\"http://www.houdunwang.com\"', '\\0')", $str); 



























?>