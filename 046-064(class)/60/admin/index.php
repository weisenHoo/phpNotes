<?php

function __autoload($classname){
	if($classname=='Action'){//����������ļ�
		include '../libs/common/Action.php';
	}elseif(substr($classname,-6)=='Action'){//���������
		include './action/'.$classname.'.php';
	}elseif($classname=='db'){//�������ݿ⺯��
		include '../libs/common/db.php';
	}else{//���빫���ļ�
		include '../libs/plus/'.$classname.'.php';
	}	
}

$a = isset($_GET['a'])?$_GET['a'].'Action':'index';
$m = isset($_GET['m'])?$_GET['m']:'index';

$action = new $a();
$action->$m();
?>