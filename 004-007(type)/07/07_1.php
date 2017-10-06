<?php
header("Content-type: text/html; charset=utf-8");

$uname = empty($_POST['uname'])?"没有填写名字":$_POST['uname'];
$age = empty($_POST['age'])?"没有填写年龄":$_POST['age'];
$tel = empty($_POST['tel'])?"没有填写电话":$_POST['tel'];
$address = empty($_POST['address'])?"没有填写地址":$_POST['address'];
$qq = empty($_POST['qq'])?"没有填写QQ号":$_POST['qq'];
$msg = empty($_POST['msg'])?"没有填写内容":$_POST['msg'];
/*
echo "
		姓名：{$uname}		<br/>
		年龄：{$age}			<br/>
		电话：{$tel}			<br/>
		地址：{$address}		<br/>
		&nbsp;QQ：{$qq}		<br/>
		自我评价：{$msg}		<br/>
	";
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>简历</title>
	<style type="text/css">
		table {
			margin: 100px auto;
		}
	</style>
</head>
<body>
	<table width="960" border="0" cellspacing="" cellpadding="">
		<tr>
			<td>姓名：</td><td><?php echo $uname; ?></td></tr>
		<tr>
			<td>年龄：</td><td><?php echo $age; ?></td>
		</tr>
		<tr>
			<td>电话：</td><td><?php echo $tel; ?></td>
		</tr>
		<tr>
			<td>地址：</td><td><?php echo $address; ?></td>
		</tr>
		<tr>
			<td>QQ：</td><td><?php echo $qq; ?></td>
		</tr>
		<tr>
			<td>自我评价：</td><td><?php echo $msg; ?></td>
		</tr>
	</table>
</body>
</html>





























