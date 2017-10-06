<?php
header("Content-type: text/html; charset=utf-8"); 


/*
//必须以字母或下划线开头，数字，字线，下划线

$webname = "bbs.houdunwang.com";
$webname = 123456;

$url = "http://www.houdunwang.com";
$url = "www.sina.com";

echo $url;

//区分大小写
$houdunwang = "houdunwang.com";
$Houdunwang = "后盾网";

echo $houdunwang."<br/>";
echo $Houdunwang;

//要有自己的命名规范
$webName = "houdunwang.com";

$userName = "后盾网";
$username = "后盾网";
$user_name = "后盾网";

$webName = 11111;

$后盾网 = "http://www.houdunwang.com";

var_dump($后盾网);
echo $后盾网;



$webname = "houdunwang";
//echo $webname;

$$webname = "后盾网";
echo $$webname."_____".$houdunwang;
*/

//$_GET[]		$_POST[]		$_REQUEST[]

//echo $_GET['uname']."<br />";
//echo $_REQUEST['uname']."<br />";

if(isset($_POST)&&!empty($_POST)){
    echo   $_POST['uname'];
}


?>

<a href="02.php?webname=houdunwang&uname=后盾网">点击提交站点</a><br />
<form action="02.php" method="post">
	<input type="text" name="uname"/><br />
	<input type="submit" value="提交表单"/>
</form>