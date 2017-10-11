<?php
/*
 * 正则表达式_重复匹配2 验证手机坐机 用户名
 * 
 * PHP中try{}catch{}的作用是用来处理异常。可以为我们收集并显示出错误信息。
 * throw new Exception抛出异常的接收 
 * 
 * */

/*
$str = "houdunwang.com";
$preg = "/houd+/is";

try{
	if(preg_match($preg, $str, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("匹配失败");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/

/*
$email = "houdunwang.a@qq.com";
$preg = "/^(\w+)(\.\w+)*@(\w+)\.(com|net|cc|info|so|org)$/is";
if(preg_match($preg, $email, $arr)){
	var_dump($arr);
}else{
	echo "匹配失败";
}
*/

/*
$str = "baiiiiiidu.com";
$preg = "/bai?/is";
try{
	if(preg_match($preg, $str, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("ERROR!");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/


//验证是否为一个整数

$str = -8766;
$preg = "/^-?\d+(\.?\d+)*$/is";
if(preg_match($preg, $str, $arr)){
	var_dump($arr);
}else{
	echo "匹配失败";
}


























?>