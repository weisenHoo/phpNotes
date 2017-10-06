<?php
header("Content-type: text/html; charset=utf-8");

/*
	array_fill(); 通过指定的索引顺序及个数生成数组
	array_filter(); 数组过滤函数，通过回调函数的方式返回新数组，如果回调函数返回TRUE，数组元素返回到新数组当中
	array_flip(); 把数组中的键名和键值进行交换
	array_key_exists(); 判断内容是否是数组的键名
	array_keys(); 返回数组中所有的键名
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

$arr1 = array("class1"=>"PHP课程","class2"=>"mysql课程","class3"=>"smarty课程","class3"=>"photoshop课程","webname"=>"后盾网","weburl"=>"bbs.houdunwang.com");
/*
function a($v){
	if(strpos($v,"枪支")){
		return true;
	}else{
		return false;
	}
}

//$arr0 = array_fill(30,2,"后盾网");
//$arr0 = array_filter($arr1,a);
//dump($arr0);
$user1 = array("uname"=>"李海","msg"=>"大家好，我叫李海，很高兴认识大家");
if(array_filter($user1,a)){
	die("包含非法信息");
}else{
	echo "留言成功";
}
*/

//$arr0 = array_flip($arr1);
//dump($arr0);

/*
if(array_key_exists("class1",$arr1)){
	echo "是数组的键名";
}
*/

$arr0 = array_keys($arr1,"PHP课程",true);
dump($arr0);






































?>