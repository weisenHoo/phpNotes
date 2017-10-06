<?php
/*
	array_reduce(); 用回调函数递归的的对数组元素进行处理，返回处理后的值
	array_slice(); 截取指定范围的数组元素，第二个参数截取开始位置，第三个参数截取长度，第四个参数是保留数字索引值
	array_splice(); 删除指定范围的素组元素，如果指定第四个参数，则在删除元素的位置放入第四个参数值
	array_sum(); 对数组中的值进行求和运算
	array_product(); 对数组中的值进行乘积运算
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr = array(1,2,3,4,5);
function a($c,$i){
	$c.='===='.$i;
	return $c;
}
echo array_reduce($arr,"a");
*/

/*
$arr = array(1,2,3,4,5);
$newArr = array_slice($arr,2,1,TRUE);
dump($newArr);
*/

/*
$arr = array(1,2,3,4,5);
$values = array('后盾网','bbs.houdunwnag.com');
$newArr = array_splice($arr,2,1,$values);
dump($arr);
dump($newArr);
*/

$arr = array(1,2,3,4,5);
//$newArr = array_sum($arr);
$newArr = array_product($arr);
dump($newArr);







































?>