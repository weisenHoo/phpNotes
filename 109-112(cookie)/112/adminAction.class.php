<?php
/*
 * 
 * 
 * */


class adminAction{
	
	function __construct(){
		if(!isset($_COOKIE['login']) || $_COOKIE['login']!=1){
			echo "<script>alert('非法登录');location.href='112.php';</script>";
			exit;
		}
	}
	function index(){
		echo "<div style='border:8px solid #dcdcdc;width:500;height:200px;'>欢迎{$_COOKIE['uname']}登录&nbsp;&nbsp;&nbsp;<a href='112.php?a=quit'>安全退出</a></div>";
	}
}





























?>