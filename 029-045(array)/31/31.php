<?php
header("Content-type: text/html; charset=utf-8");

/*
	count(); 统计数组中元素的个数
	reset(); 把数组内部指针移动到数组第一个元素，并返回元素值
	end(); 把数组内部指针移动到数组最后一个元素，并返回元素值
	prev(); 把数组指针指向上移动一位，并返回当前指针，如果到结尾返回FALSE，如果当前元素的值为空，或者0，返回值
	next(); 把数组指针指向下移动一位，并返回当前指针，如果到结尾返回FALSE，如果当前元素的值为空，或者0，返回值
	current(); 返回当前指针指向的数组元素，如果当前元素为空返回false
	key(); 返回当前指针指向元素的键名
	
*/
echo "<pre>";

$arr = array("houdunwang.com","后盾网PHP视频",array("php课程","css课程","thinkphp课程"));
/*
echo count($arr,1);

echo "<br/>";

print_r(each($arr));
print_r(each($arr));
print_r(each($arr));
reset($arr);
echo "<hr/>";
echo reset($arr);
echo "<hr/>";
print_r(each($arr));
echo "<hr/>";
print_r(end($arr));
echo "<hr/>";
reset($arr);
echo next($arr);
echo "<br/>";
print_r(next($arr));
var_dump(next($arr));
echo "<hr/>";
reset($arr);
next($arr);
print_r(current($arr));
reset($arr);

do{
	print_r(current($arr))."<br/>";
}while(next($arr));

while(list($k,$v)=each($arr)){
	echo $k."<br/>";
	print_r($v)."<br/>";
}
*/

echo key($arr);
next($arr);
echo "<br/>";
echo key($arr);
next($arr);
echo "<br/>";
echo key($arr);















































































?>