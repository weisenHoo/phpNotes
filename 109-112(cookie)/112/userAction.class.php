<?php
/*
 * 
 * 
 * */

class userAction{
	function index(){
		$this->login_h();
	}
	//��ʾ��¼ҳ
	function login_h(){
		if(isset($_COOKIE['login']) && $_COOKIE['login']==1){
			header("location:112.php?m=admin");
			exit;
		}
		include "login.html";
	}
	//��ʾע��ҳ
	function reg_h(){
		include "reg.html";
	}
	//���ע��
	function reg(){
		$uname = isset($_POST['uname'])?$_POST['uname']:'';
		$upwd = isset($_POST['upwd'])?$_POST['upwd']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$qq = isset($_POST['qq'])?$_POST['qq']:'';
		$sql = "SELECT uid FROM user WHERE uname='{$uname}'";
		if($this->query($sql)){
			echo "<script>alert('�û�����');history.go(-1);</script>";
			exit;
		}
		$sql = "INSERT INTO USER (uname,upwd,email,qq) VALUES('{$uname}','{$upwd}','{$email}','{$qq}')";
		if($this->query($sql)){
			setcookie('uname',$uname);
			setcookie('login',1);
			header("location:112.php?m=admin");
			exit;
		}else{
			echo "<script>alert('ע��ʧ��');history.go(-1);</script>";
		}
	}
	//��ɵ�¼
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
			echo "<script>alert('��¼ʧ��');history.go(-1);</script>";
		}
	}
	//sql
	function query($sql){
		$mysqli = new mysqli("localhost","root","","a112");
		$mysqli->query($sql);
		return $mysqli->affected_rows>0?TRUE:FALSE;
	}
	//�˳���¼
	function quit(){
		setcookie("uname",'',1);
		setcookie("login",'',1);
		header("location:112.php?a=login_h");
	}
}
























?>