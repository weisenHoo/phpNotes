<?php
header("Content-type: text/html; charset=utf-8");

/*
    each(); 返回数组中的键名和键值生成为新数组，如果指针结束，返回布尔假FALSE
    list(); 将索引数组的值赋值给变量
    array_map(); 数组的每一个元素，都经过回调函数处理，返回值是处理过的元素组成的新素组
    array_walk(); 数组中的吗，每一个元素，应用回调函数，成功返回真TRUE 失败返回假
    array_walk_recursive(); 递归的操作数组，使用数组中的元素应用回调函数
 */

function dump($arr){
    
    if(!$arr){
    	var_dump($arr);
    }else{
    	echo "<pre>";
    	print_r($arr);
    }
}


$arr1 = array("webname"=>"后盾网","weburl"=>"http://bbs.houdunwang.com");
$arr2 = array("后盾网论坛","http://bbs.houdunwang.com");
/*
$arr0 = each($arr1);
dump($arr0);
$arr0 = each($arr1);
dump($arr0);
$arr0 = each($arr1);
dump($arr0);
*/

/*
list($value) = $arr2;
dump($value);

while(list($k,$v)=each($arr1)){
	echo "键名：".$k."&nbsp;&nbsp;键值：".$v."<br/>";
}
*/

/*
//$houdunwnag = array(12,33,445,66,77,88,324,75);
$houdunwnag = array("<h1>后盾网考试标题</h1>","<div style='margin:10px;'>css样式联系</div>");
function a($v){
	return htmlspecialchars($v);
}
$arr0 = array_map("a",$houdunwnag);
dump($arr0);
*/

/*
$arr3 = array("李明"=>"2244","王五"=>"900","张三"=>"3214","马四"=>"3334",);
function a(&$v,$k,$c=''){
	if($v<1000){
		$v+=$c;
	}
}
if(array_walk($arr3,"a",1000)){
	echo "加工资成功！<br/>";
	dump($arr3);
}
*/

/*
$arr4a = array(1,2,3,4,5);
$arr4b = array('a','b','c','d','e');
function a($a,$b){
	return array($b=>$a);
}
$arr0 = array_map("a",$arr4a,$arr4b);
dump($arr0);
*/


$arr5 = array(
	array("uname"=>"李四","money"=>"100"),
	array("uname"=>"张三","money"=>"200"),
	array("uname"=>"王五","money"=>"300"),
	array("uname"=>"赵六","money"=>"400")
);
function a(&$v,$k){
	if($k=='money' && $v<300){
		$v+=1000;
	}
}
array_walk_recursive($arr5,"a");
dump($arr5);
























?>