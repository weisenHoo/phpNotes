<?php
/*
 * �Զ���SESSION�������
 * 
 * ob_start ��������ƻ���
 * ini_set Ϊһ������ѡ������ֵ
 * 
 * session_set_save_handler �����û��Զ���Ự�洢����
 * 
 * */

ob_start();
ini_set("session.save_handler", "user");
define("FIX", "hdw_");
function start($path,$session_name){
	global $session_path;//ȫ�ֱ���
	$session_path = $path;
	echo "start<br/>";
	echo session_id()."<br/>";
	
	echo "<br/>";
}
//��ȡsession�ļ�
function read($sid){
	global $session_path,$session_file;
	echo "read<br/>";
	$session_file = $session_path.DIRECTORY_SEPARATOR.FIX.$sid;
	echo $sid."<br/>";
	
	echo "<br/>";
	
	return @file_get_contents($session_file);//�������ļ�����һ���ַ���
}
//д������
function write($sid,$data){
	global $session_path,$session_file;
	file_put_contents($session_file, $data);//��һ���ַ���д���ļ�
	echo "write<br/>";
	echo $session_file."<br/>";
	echo $data."<br/>";
	
	echo "<br/>";
	
	return file_put_contents($session_file, $data)?TRUE:FALSE;
}
//ж��session
function destroy($sid){
	global $session_file;
	echo "destroy<br/>";
	@unlink($session_file);
	setcookie(session_name(),'',1,'/');
}
//�ر�session
function close(){
	echo "close<br/>";
	
	return TRUE;
}
//session�������մ���
function gc($max_time){
	global $session_path;
	echo "gc<br/>";
	foreach(glob($session_path."/*") as $file){//Ѱ����ģʽƥ����ļ�·��
		unlink($file);
	}
	return TRUE;
}

session_set_save_handler("start", "close", "read", "write", "destroy", "gc");
session_start();
$_SESSION['WEBNAME'] = "�����";
$_SESSION['WEBURL'] = "www.houdunwang.com";
$_SESSION['a'] = 111;
//session_destroy();










































?>