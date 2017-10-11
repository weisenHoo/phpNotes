<?php
/*
 * 
 * 
 * */

class userAction{
	function index(){
		$this->login_h();
	}
	//ÏÔÊ¾µÇÂ¼Ò³
	function login_h(){
		if(isset($_COOKIE['login']) && $_COOKIE['login']==1){
			header("location:112.php?m=admin");
			exit;
		}
		include "login.html";
	}
	//ÏÔÊ¾×¢²áÒ³
	function reg_h(){
		include "reg.html";
	}
	//Íê³É×¢²á
	function reg(){
		$uname = isset($_POST['uname'])?$_POST['uname']:'';
		$upwd = isset($_POST['upwd'])?$_POST['upwd']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$qq = isset($_POST['qq'])?$_POST['qq']:'';
		$sql = "SELECT uid FROM user WHERE uname='{$uname}'";
		if($this->query($sql)){
			echo "<script>alert('ÓÃ»§´æÔÚ');history.go(-1);</script>";
			exit;
		}
		$sql = "INSERT INTO USER (uname,upwd,email,qq) VALUES('{$uname}','{$upwd}','{$email}','{$qq}')";
		if($this->query($sql)){
			setcookie('uname',$uname);
			setcookie('login',1);
			header("location:112.php?m=admin");
			exit;
		}else{
			echo "<script>alert('×¢²áÊ§°Ü');history.go(-1);</script>";
		}
	}
	//Íê³ÉµÇÂ¼
	function login(){
		$uname = isset($_POST['uname'])?$_POST['uname']:'';
		$upwd = isset($_POST['upwd'])?$_POST['upwd']:'';
		$ctime = $_POST['ctime']==0?0:time()+$_POST['ctime'];
		$sql = "SELECT uid FROM user WHERE uname='{$uname}' AND upwd = '{$upwd}'";
		if($this->query($sql)){
			setcookie("uname",$uname);
			setcookie("login",1,$ctime);
			header("location:112.php?m=admin");
			exit;
		}else{
			echo "<script>alert('µÇÂ¼Ê§°Ü');history.go(-1);</script>";
		}
	}
	//sql
	function query($sql){
		$mysqli = new mysqli("localhost","root","","a112");
		$mysqli->query($sql);
		return $mysqli->affected_rows>0?TRUE:FALSE;
	}
	//ÍË³öµÇÂ¼
	function quit(){
		setcookie("uname",'',1);
		setcookie("login",'',1);
		header("location:112.php?a=login_h");
	}
}
























?>