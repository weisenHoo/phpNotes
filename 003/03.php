<?php
//设置编码
header("Content-type: text/html; charset=utf-8"); 

/*
$houdunwang = "后盾网视频发布平台，高清视频免费下载";

//传值赋值 方式
//$bbs = $houdunwang;

//传址方式
$bbs = &$houdunwang;

$bbs = "www.sina.com.cn";
echo $houdunwang;


$houdunwang = "www.houdunwang.com";

echo $houdunwang;
echo "<br />";
echo $bbs;
*/


//常量：值始终保持不变的单元
//define('常量名称','值');
//echo HOUDUNWANG;
//常量区分大小写
//命名规则建议建议大写
//标量：字符串（string）	整形（ing）	浮点型（float）	布尔型（bool）

/*
$hdw = "后盾网";
define('BBS','bbs.houdunwang.com');
function fun1(){
	echo $hdw;
	echo BBS;
}
fun1();
*/

/*
define('DBNAME','hdw');
define('DBNAME','sina_db');
echo DBNAME;
*/


//系统常量
//echo M_PI;
//echo PHP_OS;
//echo PHP_VERSION;



//魔术常量	__LINE__	__FILE__	__FUNCTION__	__CLASS__
//			__METHOD__

//echo __LINE__;//返回当前行

//echo __FILE__;//返回当前文件路径

/*
function fun2(){
	echo __FUNCTION__;//返回函数名
}
fun2();
*/

/*
class hdw{
	function fun1(){
		echo __CLASS__;//返回当前类的名字
		echo "<br/>--------------------------------------------------------------------<br/>";
		echo __METHOD__;//可以输出hdw这个类里面的fun1这个方法
	}
}
$ob1 = new hdw();
$ob1->fun1();
*/

/*
$houdunwang = "后盾网视频";
//echo $houdunwang;
//var_dump($houdunwang);//检测是否有这个变量
$f = isset($houdunwang);//检测变量是否定义
//var_dump($f);

if($f==false){
	echo "变量不存在";
}else{
	echo $f;
}
*/

define('URL','bbs.houdunwang.com');
//$b = defined('URL');//检测常量是否定义
//var_dump($b);
if(defined('URL')){
	echo URL;
}else{
	echo"没有定义URL常量，请定义";
}






?>