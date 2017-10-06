<?php
header("Content-type: text/html; charset=utf-8");

/*
	1、任何数量的参数
		func_get_args(); 接收一个数组，数组里面包含所有参数
		func_num_args(); 取得共有几个参数
		func_get_arg(整数); 取得第几个参数，序号是从0开始的
		
	
	2、变量函数
		可以在变量后加()，系统会查找与变量值同名的函数，去执行


	3、递归调用
		在函数体内，调用本函数(调用自己)
		加上一个停止调用的条件，否则陷入死循环的调用
		
		
	4、内部函数
		可以在函数体内调用函数
		 
*/


/*
function stu_name($name){
//	print_r(func_get_args());
	$arr = func_get_args();
	foreach($arr as $key=>$value){
		echo "学生{$key}名字是：".$value."<br/>";
	}
	echo "一共有".func_num_args()."多少名学生";
	echo "<hr/>";
	echo "第三个学生是：".func_get_arg(2);
}
//stu_name("张三");
stu_name("张三","李四","王五","赵六","周七","李八");
*/

/*
$houdunwang = "show_date";
function show_date(){
	echo date("Y-m-d");
}
//show_date();
//$houdunwang() == show_date();
$houdunwang();
*/

/*
function jc($i){
	if($i>1){
		$s = $i*jc($i-1);
	}else{
		$s = $i;
	}
	
	return $s;
}
echo jc(98);
*/


function houdunwang(){
	function bbs(){
		echo "后盾网视频教程分享平台,bbs.houdunwang.com";
	}
	bbs();
}
houdunwang();





































?>