<?php
header("Content-type: text/html; charset=utf-8");

/*
	addslashes(); 在预定义字符串前添加反斜杠 
	stripslashes(); 把转义字符串前的反斜杠删除
	get_magic_quotes_gpc(); 获得PHP.INI中是否开启自定转义
*/

//phpinfo();

echo "<pre>";
print_r(ini_get_all());

//var_dump(get_magic_quotes_gpc());

//$cname = @$_GET['cname'];
//$uname = @$_GET['uname'];

/*
if(!get_magic_quotes_gpc()){
	$cname = addslashes(@$_GET['cname']);
	$uname = addslashes(@$_GET['uname']);
}else{
	$cname = @$_GET['cname'];
	$uname = @$_GET['uname'];
}

$mysqli = new mysqli('localhost','root','','edu');
$mysqli->query('SET NAMES UTF8');//大写有效
$sql = "insert into user (cname,uname) values('$cname','$uname')";
$mysqli->query($sql);

echo $cname;
echo "<br/>";
echo stripslashes($cname);
echo "<br/>";
?>
<form action="" method="get">
	课程名<input type="text" name="cname" /><br />
	学员名<input type="text" name="uname" /><br />
	<input type="submit" value="提交" />
</form>
<?php
*、




























































?>