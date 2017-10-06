<?php
header("Content-type: text/html; charset=utf-8");
	
$user_arr = array("admin","tt","houdunwang","bbs");
$upwd_arr = array(
					"admin"=>"123456",
					"tt"=>"555",
					"houdunwang"=>"888",
					"bbs"=>"999"
			);

$uname = isset($_GET['uname'])?$_GET['uname']:'';
$upwd = isset($_GET['upwd'])?$_GET['upwd']:'';

$ok = false;

if(in_array($uname,$user_arr)){
	if(in_array($upwd,$upwd_arr)){
		echo "登录成功";
		$ok = true;
	}else{
		echo "密码错误";
	}
}else{
	echo "用户不存在";
}

if($ok){
	echo "欢迎来到网站后台";
}else{
	?>

	<html>
		<head></head>
		<body>
			<br />
			<form method="get" action="">
				用户名：<input type="text" name="uname" /><br />
				密&nbsp;码：<input type="password" name="upwd" /><br />
				<input type="submit" value="会员登录" /><br />
			</form>		
		</body>
	</html>
	
	<?php
}
?>