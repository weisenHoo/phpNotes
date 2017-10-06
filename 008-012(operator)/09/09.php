<?php
header("Content-type: text/html; charset=utf-8");


/*
//4、逻辑运算符

	TRUE	FALSE
	
		例：
			招女文艺兵：1、女性
					   2、18岁-25岁
					   3、身高158cm以上
					   4、视力良好
			
			你是女性 【并且】 你的年龄大于18小于25 【并且】 你身高大于158CM 【并且】 视力良好
			
			不成立(FALSE 0)  如果返回FLASE 假 0：不能当兵
			PHP中会返回TURE 真 1：你就可以去当兵
			
			
			管理员登录后台：1、用户名  密码  MYSQL数据库里存在
						   2、所在用户组必须是有管理权限的用户组
					   
		
		1、逻辑与  and或&&  左右两边表达式均成立  TRUE 返回真	
			$uname = "admin";
			$upwd = "houdunwang";
			
			if($uname == "admin" && $upwd == "houdunwang"){
				echo "用户名与密码正确，登录成功！";
			}else{
				echo "用户登录信息不正确，登录失败！";
			}
			
			
		2、逻辑或  or或||  左右两边表达式有一个成立  TRUE 表达式返回真
			
			if($uname == "admin" || $upwd == "houdunwang"){
				echo "用户名与密码正确，登录成功！";
			}else{
				echo "用户登录信息不正确，登录失败！";
			}
			
			
		3、逻辑非  not或!  当为真返回假，当为假时返回真
		
			$houdunwang = 123456;
			if(!is_string($houdunwang)){
				echo " 后盾网";
			}else{
				echo "什么都没有";
			}
			
		
		4、逻辑异或  xor  当左右表达式有一个为真  TRUE  返回真  其他情况均返回假  FALSE  
			true xor true    true xor false    false xor true
*/

$houdunwang = "后盾网";
$bbs = "后盾网论坛";
var_dump(isset($bbs));
var_dump(isset($houdunwang));
var_dump(isset($bbs) xor isset($houdunwang));
















































?>