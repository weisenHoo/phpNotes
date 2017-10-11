<?php
/*
 * 安全的SESSION会话
 * 
 * 
 * */

var_dump($_SERVER);

//echo "<pre>";
//print_r($_SERVER);

//session_start();
//$_SESSION['check'] = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'];


/*
session_start();
$_SESSION['chk'] = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'];
//1：登录（用户名，密码） 2：保存SESSION信息 IP+浏览器信息
if(isset($_SESSION['chk']) && $_SESSION['chk']!=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']."111111"){
	session_regenerate_id();
}

var_dump($_SESSION);
*/






































?>