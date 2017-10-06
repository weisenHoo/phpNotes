<?php
/*
 * get_class 获取对象的类名，区分大小写，如果在方法中调用可以省略对象
 * get_declared_classes 以数组形式返回当前脚本中定义的类
 * get_declared_interfaces 以数组形式返回当前脚本中的接口
 * 
 * */

class Ren{
	function __construct(){
		echo get_class();
	}
}
$lisi = new ren();

echo "<pre>";
//print_r(get_declared_classes());
print_r(get_declared_interfaces());











































?>