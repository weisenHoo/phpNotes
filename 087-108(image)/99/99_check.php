<?php

session_start();

//echo $_SESSION['code'];
//echo "<br/>";
//echo strtoupper($_POST['code']);

if(strtoupper($_POST['code']) == $_SESSION['code']){
	echo "<script>alert('验证成功');</script>";
}else{
	echo "<script>alert('验证失败，请重试！');history.go(-1);</script>";
}











































?>