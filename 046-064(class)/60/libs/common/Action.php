<?php
/*
 * 总的控制器文件
 * */
 class Action{
 	function __construct(){
 		echo "总的ACTION控制器文件";
 	}
	function message($msg){
		echo "<script>alert('{$msg}')</script>";
	}
 }
?>