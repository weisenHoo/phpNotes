<?php
/*
 * 验证客户端cookie及cookie优先级
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
	public $name = "后盾网";
	function say(){
		echo "欢迎来到后盾网论坛学习PHP知识";
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
	echo "进入具体页面……";
}else{
	echo "对不起，本站需要COOKIE功能，请开启您浏览器的COOKIE功能！";
}




























?>