<?php
header("Content-type: text/html; charset=utf-8");

/*
	if语句:
		if(表达式1){
			代码段1
		}else if(表达式2){
			代码段2
		}else if(表达式3){
			代码段3
		}else{
			代码段n
		}
	主意: if语句中，一个条件成立，其他分支不执行	
		if中的表达式只能为布尔型
*/
$user_age = 6;
if($user_age>=25 && $user_age<=35){
	echo "你可以玩中级游戏1111111111111111111111111<br/>";
	echo "玩游戏中……";
}else if($user_age>35 && $user_age<55){
	echo "你可以玩中级与高级游戏2222222222222222222<br/>";
	echo "玩游戏中……";
}else{
	echo "你不符合条件，只能玩免费的小游戏";
}




















?>


























