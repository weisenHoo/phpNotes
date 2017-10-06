<?php
header("Content-type: text/html; charset=utf-8");
	
/*
PHP是一个弱类型的语言

其他语言定义方式
Int number = 100;
Striing houdunwang = "后盾网";
*/

/*
 
getType(变量,常量);

//判断变量类型函数
	is_string();	//是不是一个字符串类型
	is_int();		//是不是一个整形
	is_float();		//是不是一个浮点型
	is_array();		//是不是一个数组类型
	is_object();	//是不是一个对象
	is_null();		//是不是一个空值
	is_resource();	//是不是一个资源类型
	is_bool();		//是不是一个布尔类型
	

$houdunwang = array('后盾网','视频教程');
//var_dump($houdunwang);
//echo getType($houdunwang);
if(getType($houdunwang)=='array'){
	echo "这是一个数组，可以进行遍历";
}
*/


class c{
	public $c;
	function eat(){
		echo $men."在吃饭";
	}
}
//$houdunwang = "后盾网";
//$houdunwang = 1.222;
//$houdunwang = new c();
//define("URL","houdunwang.com");
//echo getType(URL);
//$v = getType(URL);
//var_dump($v);
//var_dump(is_bool(URL));
/*
echo getType(URL);
echo "<br/>";
if(is_string(URL)){
	echo "URL常量是一个字符串类型";
}

if(getType(URL)){
	echo "URL常量是一个字符串类型";
}
*/
$student = array("张三","李四","王五","赵六");
if(is_array($student)){
//	遍历:foreach(数组 as 编号=>值){}
	foreach($student as $key=>$value){
		echo "学员".$key."的姓名是".$value."<br/>";
	}
}


?>