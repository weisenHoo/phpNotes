<?php
/*
 * 
 * 
 * */


class adminAction{
	
	function __construct(){
		if(!isset($_COOKIE['login']) || $_COOKIE['login']!=1){
			echo "<script>alert('�Ƿ���¼');location.href='112.php';</script>";
			exit;
		}
	}
	function index(){
		echo "<div style='border:8px solid #dcdcdc;width:500;height:200px;'>��ӭ{$_COOKIE['uname']}��¼&nbsp;&nbsp;&nbsp;<a href='112.php?a=quit'>��ȫ�˳�</a></div>";
	}
}





























?>