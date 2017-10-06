<?php
/*
 * __autoload函数实例及单入口文件
 * spl_autoload_register函数说明
 * 
 * */
/*
class a{
	function __construct(){
		echo __CLASS__;
	}
}

function __autoload($classname){
	echo $classname."的类找不到";
}

$obj = new aa();
*/

//spl_autoload_register("mm");
//spl_autoload_register(array('a','auto'));
//function mm($name){
//	echo $name."-------------";
//}

class a{
	function __construct(){
//		echo "后盾网";
		$this->config();
	}
	public static function auto($name){
		echo $name."33333333333333";
	}
	public function config(){
		spl_autoload_register(array(__CLASS__,'auto'));
	}
}
function __autoload($classname){
	echo $classname;
}

$b = new a(); 
$c = new houdunwang();



?>