<?php

session_start();

//echo $_SESSION['code'];
//echo "<br/>";
//echo strtoupper($_POST['code']);

if(strtoupper($_POST['code']) == $_SESSION['code']){
	echo "<script>alert('��֤�ɹ�');</script>";
}else{
	echo "<script>alert('��֤ʧ�ܣ������ԣ�');history.go(-1);</script>";
}











































?>