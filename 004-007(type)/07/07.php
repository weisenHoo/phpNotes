<?php
header("Content-type: text/html; charset=utf-8");

/*
	1、自由转换
	2、强制转换	$houdunwang = "后盾网视频";	$bbs = (array)$houdunwang;
	3、setType();作用于原变量
	4、具体装换函数:
		intval();	//转换为整形
		floatval();	//转换为浮点型
		strval();	//转换为字符串型
	只针对标量类型  int  float  string  bool  对象 数组类型不支持
		
*/

/*
$a = 100;
$b = (string)$a;
var_dump($a);
var_dump($b);
*/

/*
//$a = "2008北京奥运会";
$a = "欢迎来到北京，2008北京奥运会开幕了";
$b = (int)$a;
var_dump($a);
var_dump($b);
*/

/*
$a = "2010.11天气很冷";
//$b = (float)$a;
$b = (array)$a;
var_dump($a);
var_dump($b);
*/

/*
$a = "2010后盾网";
//setType($a,'int');
//setType($a,'float');
setType($a,'array');
var_dump($a);
*/

/*
class user{
	
}
//$a = "500";
//$a = 9800.55;
$a = new user();
var_dump($a);
//$b = intval($a);
//$b = floatval($a);
$b = strval($a);
var_dump($b);
*/

/*
$a = array("后盾网","新浪网","百度网");
var_dump($a);
$b = strval($a);
//var_dump($b);
echo $b;
*/

//$_GET[]  $_POST[]  $_REQUEST[]

?>

<html>
	<head>
		<title>提交表单练习</title>
	</head>
	<body>
		<form action="07_1.php" method="post">
			姓名:<input type="text" name="uname" /><br />
			年龄:<input type="text" name="age" /><br />
			电话:<input type="text" name="tel" /><br />
			地址:<input type="text" name="address" /><br />
			&nbsp;QQ:<input type="text" name="qq" /><br /><br />
			自我评价:<br />
			<textarea rows="10" cols="30" name="msg"></textarea><br /><br />
			<input type="submit" value="提交简历" />&nbsp;&nbsp;
			<input type="reset" value="重添" />
		</form>
	</body>
</html>

<?php

























?>