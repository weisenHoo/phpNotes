<?php
/*
 * __autoload����ʵ����������ļ�
 * spl_autoload_register����˵��
 * 
 * */
/*
class a{
	function __construct(){
		echo __CLASS__;
	}
}

function __autoload($classname){
	echo $classname."�����Ҳ���";
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
//		echo "�����";
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