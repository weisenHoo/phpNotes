<?php
header("Content-type: text/html; charset=utf-8");

/*
	定义字符串
		'' 单引号     "" 双引号     <<<定界符
 
*/

/*
$url = "http://bbs.houdunwang.com";
//$houdunwang = "欢迎来到后盾网你，\n免费下载高清版 请登录$url";
$houdunwang = nl2br("欢迎来到后盾网你，\n免费下载高清版 请登录$url");
//var_dump($houdunwang);
echo $houdunwang;
*/

$url = "http://bbs.houdunwang.com";
$hdw = <<<houdunwang
	后盾网"免费"视频分享，力争做到最细致，最专业，最全面，目的只有一个，让学员得到'全面'的知识，做到看视频学到专业知识找到理想工作。<br/>网址：$url	
houdunwang;

echo $hdw;






























?>