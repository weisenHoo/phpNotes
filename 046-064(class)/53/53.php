<?php
/*
 * ����$this self parent �ڴ淽ʽ��ʹ�÷�������
 * */

 /*
class a{
	function show(){
//		$this->d();
		self::d();
	}
	function d(){
		echo 1;
	}
}
class b extends a{
	function d(){
		echo 2;
	}
}

$e = new a();
$e->show();
*/

/*
class a{
	function c(){
		echo 1;
		echo "<br/>";
	}
}
class b extends a{
	function c(){
		parent::c();
		echo 2;
	}
}
$d = new b();
$d->c();
*/


class TPL{
	private $tplpath;
	private $catch;
	private $catechTime;
	function __construct(){
		$this->tplpath = "../template/default<br/>";
		$this->catch = "../catch<br/>";
		$this->catechTime = 3600;
	}
	function display($tplFile){
		echo "����ģ���ļ� {$tplFile} <br/>";
		echo "ģ��·���� {$this->tplpath} <br/>";
		echo "{$this->catch}";
		echo "<hr/>";
	}
	function reos(){
		echo "����ģ���ǩ";
	}
	function wrong(){
		echo "����";
	}
}
class App extends TPL{
	function __construct(){
		parent::__construct();
		echo "<br/>APP<br/>";
	}
}
class admin extends App{
	function __construct(){
		parent::__construct();
		echo "<br/>admin<br/>";
	}
}
class member extends App{
	
}


$chanel = new admin();
$chanel->display("index.html");
$user = new member();
$user->display('member/user.html');




































?>