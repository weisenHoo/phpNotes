<?php
header("Content-type: text/html; charset=utf-8"); 

/*	
	标量类型:整形(int)  浮点型(float)  字符串型(string)  	布尔型(boolean)
	复合类型:数组(array)  对象(object)
	其他类型:资源(resource)  NULL
*/

/*
//$number = 100;
//$number = 2147483647;
$number = 2.25;
var_dump($number);
*/


/*
//单引号执行效率优于双引号

//$str = '后盾网\'免费\'视\n\r\t频教程';
//$str2 = "后盾网\'免费\'视\n\r\t频教程";

$bbs = "bbs.houdunwang.com";
$str = '后盾网$bbs免费视频教程';
//$str2 = "后盾网免费视频教程$bbs";
//$str2 = "后盾网{$bbs}免费视频教程";
$str2 = "后盾网\$bbs免费视频教程";
//$str2 = "后盾网".$bbs."免费视频教程";
echo $str;
echo '<br />';
echo $str2;
*/

//定界符
$name = "新浪网www.sina.com.cn";
$bbs = <<<houdunwang
<html>
	<head></head>
	<body>
		<div style="background-color: #ccc;border: 1px solid #000;">
			{$name}ssssssssssssssssss
		</div>
		<h1>"欢迎来到后盾网"</h1>
		<span style="color: #f00;">网址是www.houdunwang.com</span>
	</body>
</html>
houdunwang;

echo $bbs;



































?>