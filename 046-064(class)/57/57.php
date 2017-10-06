<?php
/*
 * 魔术常量：
 * __CLASS__ 得到类名
 * __METHOD__ 得到方法名
 * __FUNCTION__ 得到函数名
 * __DIR__ 得到当前文件的绝对路径
 * __FILE__ 得到当前文件的路径
 * 
 * */

class HouDunWnag{
	function _hdw0(){
		return __CLASS__;
	}
	function _hdw1(){
		return __METHOD__;
	}	
}
$a = new HouDunWnag();
echo $a->_hdw0()."<br>";
echo $a->_hdw1()."<br>";

function _hdw2(){
	echo __FUNCTION__;
	echo "<br/>";
}
_hdw2();

echo __FILE__;
echo "<br/>";

//$path = str_replace('\\', '/', dirname(__FILE__));
$path = dirname(__FILE__);
define("WEBDIR",$path);//网站跟目录
define("TEMPLATE", WEBDIR.DIRECTORY_SEPARATOR.'template');//模板目录
echo TEMPLATE;
echo "<br/>";

echo @$_SERVER[SCRIPT_NAME];

















































?>