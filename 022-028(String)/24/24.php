<?php
header("Content-type: text/html; charset=utf-8");

/*
	字符串输出
		echo(); 输出一个或多个字符串
		print(); 输出字符串
		printf(); 格式化输入字符串
	
	
	字符串截取
		substr("字符串","开始截取的位置","截取多少位"); 对字符串进行指定数量的截取
		strchr();     strstr();别名     查找一个字符串在另一个字符串中第一次出现，返回字符串到结尾    
		stristr(); 不区分大小写
		strrchr(); 查找一个字符串在另一个字符串中最后出现的位置，返回字符串到结尾    
		strpos(); 从头查找一个字符串在另一个字符串中第一次出现的位置，区分大小写		
		stripos(); 功能与上函数相同，但是不区分大小写		
		strrpos(); 从后查找一个字符串在另一个字符串中第一次出现的位置，区分大小写			
		sortok(); 通过字符串把主字符串进行拆分		
		parse_str(); 把字符串截取为变量		
		chunk_split(); 把字符串按指定大小拆分
*/

/*
$bbs_url = "bbs.houdunwang.com";
$bbs_name = "后盾网论坛";

echo $bbs_name,$bbs_url;
echo "<br/>";
print($bbs_name);
echo "<br/>";
$number = 152;
printf("后盾网%.3f视频教程",$number);
*/

/*
$houdunwang = "bbs.houdunwang.com";
$str = substr($houdunwang,4,10);
echo $str;
*/

/*
$bbs = "后盾网视频教程分享 houdunwang.com，下载高清版教程请登录后盾网论坛";
$abc = "abcdefg";
//$str = strchr($abc,'Bc');
//$str = stristr($abc,'Bc');
//$str = strrchr($bbs,"后盾网");
//$str = strpos($bbs,"教程");
$str = "php课程,mysql课程,div+css标准布局,0,dreamweaver";
$s = strtok($str,',');
//var_dump($str);
while($s!==false){
	echo $s;
	echo "<br/>------------------------------<br/>";
	$s = strtok(',');
}
*/

/*
$url = "http://bbs.houdunwang.com?uname=zangsan&age=33&sex=boy";
$u_msg = substr($url,strpos($url,"?")+1);
parse_str($u_msg);
echo "用户名：".$uname."<br/>";
echo "&nbsp;&nbsp;&nbsp;年龄：".$age."<br/>";
echo "&nbsp;&nbsp;&nbsp;性别：".$sex."<br/>";
*/

$str = "php,mysql,div+css,0,dreamweaver";
echo chunk_split($str,3,"<br/>");



























?>