<?php
/*
 * ��֤�ͻ���cookie��cookie���ȼ�
 * 
 * */

/*
setcookie("web","edu",time()+3600);
//setcookie("web","bbs.houdunwang.com",time()+3600,'/');
setcookie("web","edu",time()+3600,'/',FALSE,1,TRUE);

echo $_COOKIE['web'];
*/


$hdw = array("bbs.houdunwang.com","www.houdunwang.com");

/*
setcookie("hdw[0]",$hdw[0]);
setcookie("hdw[1]",$hdw[1]);
*/

/*
setcookie("hdw",serialize($hdw));
var_dump(unserialize($_COOKIE['hdw']));
*/

/*
class hdw{
	public $name = "�����";
	function say(){
		echo "��ӭ�����������̳ѧϰPHP֪ʶ";
	}
}

$obj = new hdw();
setcookie("obj",serialize($obj));
*/


if(!isset($_GET['ckcookie'])){
	setcookie("cookieon","1");
	$url = "http://localhost/phpnotes/109-112(cookie)/111/111.php?ckcookie=1";
	header("location:".$url);
}

if(isset($_COOKIE['cookieon'])){
	echo "�������ҳ�桭��";
}else{
	echo "�Բ��𣬱�վ��ҪCOOKIE���ܣ��뿪�����������COOKIE���ܣ�";
}




























?>