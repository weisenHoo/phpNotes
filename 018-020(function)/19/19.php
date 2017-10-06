<?php
header("Content-type: text/html; charset=utf-8");

/*
	变量的作用范围
	
	静态变量
		static 
			1、是在所有对函数调用中共享
			2、只有在第一次调用的时候赋值
	
	按值参数传递和按址传递参数


 
*/

/*
$bbs = '后盾网论坛';
function say(){
	global $bbs;//定义全局变量
	$bbs = "http://bbs.houdunwang.com<br/>";
	unset($bbs);
//	$bbs = "11111111111111111";
//	echo $bbs;
//	return $bbs;
}
say();
echo $bbs;

//echo "<pre>";
//print_r($GLOBALS);



function houdunwang(){
	static $i = 1;//静态变量
	$i++;
	echo $i."<br/>";
}

houdunwang();
houdunwang();
houdunwang();
*/

function eat(&$name){//& 按址传递
	$name = $name."女士";
	echo $name."在吃饭<br/>";
}
$name = "小张";
eat($name);
echo $name;























































?>