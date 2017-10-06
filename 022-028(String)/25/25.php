<?php
header("Content-type: text/html; charset=utf-8");

/*
	字符串替换函数
		str_replace(); 替换字符串或数组元素，区分大小写，第四个参数可选 用于统计替换次数
		str_ireplace(); 不区分大小写
		strtr(); 替换字符串中的任意字符
		
	字符串比较函数
		strcmp(); 比较字符串，如果相等返0 如果字符串1<字符串2 -1 字符串1>字符串2 1 
		strcasecmp(); 不区分大小写字符串比较
		strnatcmp(); 按自然数进行字符串比较
		strncmp(); 指定位置进行字符串比较
		similar_text(); 比较字符串有多少个字符相等，第三个参数返回一个变量，为两个字符串相似的百分比
		substr_count(); 查找一个字符串在另一个字符串中出现的次数，可以指定起始查找位置与查找长度
*/

/*
$houdunwang = "后盾网www.houdunwang.com,下载高清版请登录论坛bbs.houdunwang.com";
$arr0 = array("houdunwang.com","bbs.houdunwang.com");
$arr1 = array("h","d","w");
$arr2 = array("H","D","W");
$str = str_replace($arr1,$arr2,$houdunwang,$k);
$str0 = str_replace($arr1,$arr2,$arr0,$i);
echo $str."<br/>";
echo $k."<br/>";
print_r($str0)."<br/>";
echo $i;
*/

//echo strcmp("houdunwang.com","houdunwang.com");
//echo strcmp("houdunwang.com","houdunwang");
//echo strcmp("houdunwang","houdunwang.com");

//echo strncmp("1081","1002",3);

//echo similar_text("h1udun","ho2du3",$v);
//echo $v;

//$arr = array("h"=>"H","a"=>"A","m"=>"M");
//echo strtr("www.houdunwnag.com",$arr);













































?>