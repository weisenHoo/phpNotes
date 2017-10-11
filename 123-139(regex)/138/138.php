<?php
/*
 * 正则表达式_函数使用
 * 
 * preg_replace
 * 
 * */


//$str = "我在百度搜索http://www.baidu.com.cn,和腾讯搜索http://www.soso.com看到后盾网论坛http://bbs.houdunwang.com的PHP免费视频教程";
//$pregArr = array(
//	"/(http:\/\/)?[a-z]{0,10}\.(?!houdunwang)\w+?\.[a-z]{2,4}(.[a-z]{2})*/is",
//	"/(http:\/\/)(bbs|www)?(\.houdunwang\.com)/is"
//);
//$replaceArr = array(
//	"",
//	"<a href='\\0' style='font-weight: bold;color: #f00;'>\\0</a>"
//);
//$newstring = preg_replace($pregArr, $replaceArr, $str);
//echo $newstring;

/*
$str = "欢迎来到后盾网学习PHP技术http://bbs.houdunwang.com，免费高清下载请登录后盾网论坛";
$preg = "/后盾/is";
$replace = "<a target='_blank' href='http://www.huodunwang.com'>\${0}2011开源永久免费发布视频教程</a>";
$newStr = preg_replace($preg, $replace, $str);
echo $newStr;
*/


/*
$str = "后盾网论坛http://bbs.houdunwang.com,后盾网http://www.houdunwang.com";
$preg = "/(http:\/\/)?(bbs|www)?\.houdunwang.com/ise";
$replace = "\"<a target='_blank' href='\\0'>\".strtoupper('\\0').\"</a>\"";
$newStr = preg_replace($preg, $replace, $str);
echo $newStr;
*/


$str = "houdunwang.com";
$preg = "/u/is";
$replace = "#";
$newStr = preg_replace($preg, $replace, $str, -1, $count);
echo $newStr."<br/>";
echo "共替换{$count}次";















?>