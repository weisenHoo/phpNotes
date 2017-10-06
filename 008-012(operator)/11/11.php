<?php
header("Content-type: text/html; charset=utf-8");

/*
//链接运算符
	.	链接两个参数生成新的字符串
	
		$houdunwang = "后盾网视频教程分享平台";
		$bbs = "bbs.houdunwang.com";
		$news = "<h1>".$houdunwang.$bbs."</h1>"."<hr/>";
		echo $news;
		
	
	.=	链接运算符，把右边的值，追加到左边变量
	
		$houdunwang = "后盾网";
		$houdunwang .= "http://www.houdunwang.com";
		echo $houdunwang;
		
		$a = 1;
		$a .=2;
		echo $a;
		
		
	
//赋值运算符
	=	把右边值，赋值给左边变量(注:赋值用=,判断用==)
	
		$a = 100;
		$a = '1111';



//禁止显示警告信息
	@	函数，变量，常量前来禁止显示错误的警告信息，不可以放在条件结构语句中，一般来说，放置在有返加在值的地方

		$file_name = "houdunwangs.txt";
		$file = @fopen($file_name,'r');
		$content = @fread($file,filesize($file_name));
		echo $content;

		$file_name = "houdunwang.txt";
		$file = fopen($file_name,'r');
		$content = fread($file,filesize($file_name));
		echo $content;
		
		

//三元表达式
	表达式1 ? 表达式2 : 表达式3










*/

$houdunwang = 500;
$msg = $houdunwang>800 ? '$houdunwang是最大的' : '$houdunwang小';
echo $msg;

echo '<hr/>';

//$uname = isset($_GET['uname'])?$_GET['uname']:'没有获得数据';
//$uname = !empty($_GET['uname'])?$_GET['uname']:'没有获得数据';
//echo $uname;

if(!empty($_GET['uname'])){
	echo $_GET['uname'];
}else{
	echo "没有获得数据";
}
















































?>