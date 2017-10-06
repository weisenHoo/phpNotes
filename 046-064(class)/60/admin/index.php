<?php

function __autoload($classname){
	if($classname=='Action'){//载入控制器文件
		include '../libs/common/Action.php';
	}elseif(substr($classname,-6)=='Action'){//载入控制器
		include './action/'.$classname.'.php';
	}elseif($classname=='db'){//载入数据库函数
		include '../libs/common/db.php';
	}else{//载入公用文件
		include '../libs/plus/'.$classname.'.php';
	}	
}

$a = isset($_GET['a'])?$_GET['a'].'Action':'index';
$m = isset($_GET['m'])?$_GET['m']:'index';

$action = new $a();
$action->$m();
?>