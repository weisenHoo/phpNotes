<?php
/*
 * 自定义SESSION处理机制
 * 
 * ob_start 打开输出控制缓冲
 * ini_set 为一个配置选项设置值
 * 
 * session_set_save_handler 设置用户自定义会话存储函数
 * 
 * */

ob_start();
ini_set("session.save_handler", "user");
define("FIX", "hdw_");
function start($path,$session_name){
	global $session_path;//全局变量
	$session_path = $path;
	echo "start<br/>";
	echo session_id()."<br/>";
	
	echo "<br/>";
}
//读取session文件
function read($sid){
	global $session_path,$session_file;
	echo "read<br/>";
	$session_file = $session_path.DIRECTORY_SEPARATOR.FIX.$sid;
	echo $sid."<br/>";
	
	echo "<br/>";
	
	return @file_get_contents($session_file);//将整个文件读入一个字符串
}
//写入内容
function write($sid,$data){
	global $session_path,$session_file;
	file_put_contents($session_file, $data);//将一个字符串写入文件
	echo "write<br/>";
	echo $session_file."<br/>";
	echo $data."<br/>";
	
	echo "<br/>";
	
	return file_put_contents($session_file, $data)?TRUE:FALSE;
}
//卸载session
function destroy($sid){
	global $session_file;
	echo "destroy<br/>";
	@unlink($session_file);
	setcookie(session_name(),'',1,'/');
}
//关闭session
function close(){
	echo "close<br/>";
	
	return TRUE;
}
//session垃圾回收处理
function gc($max_time){
	global $session_path;
	echo "gc<br/>";
	foreach(glob($session_path."/*") as $file){//寻找与模式匹配的文件路径
		unlink($file);
	}
	return TRUE;
}

session_set_save_handler("start", "close", "read", "write", "destroy", "gc");
session_start();
$_SESSION['WEBNAME'] = "后盾网";
$_SESSION['WEBURL'] = "www.houdunwang.com";
$_SESSION['a'] = 111;
//session_destroy();










































?>