<?php
header("Content-type: text/html; charset=utf-8");
	
	
/*

	switch分支语句
		switch(表达式){
			case 值1:
			……
			break;
			case 值2:
			……
			break;
			default:
			……
		}
		注：表达式一般为变量
			如果不加break;后面的case都会执行
			
		switch：当值有固定的几种情况时，使用switch，语句结构清晰，执行效率高

*/

//1 金牌会员     2 铜牌会员     3 银牌会员     4 免费会员

$user_geoup = 2;
$user_age = 28;
switch($user_geoup){
	case 1:
		echo "你是金牌会员";
		break;
		
	case 2:
		echo "你是银牌会员<br/>";
		if($user_age>25){
			echo "你是一个青年银牌会员";
		}elseif($user_age>30){
			echo "你是一个中年银牌会员";
		}
		break;
		
	case 3:
		echo "你是铜牌会员";
		break;
		
	default:
		echo "你是免费会员";
}














































?>