<?php
/*
 * 正则表达式是什么 做什么用的
 * 
 * preg_match 执行匹配正则表达式
 * 
 * */

 
 

?>

<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="gb2312" />
	<title>Document</title>
	
	<style type="text/css">
		* { padding: 0;margin: 0;}
		body { background: #333;}
		li { list-style: none;}
		
		#form {
			width: 500px;
			height: 200px;
			background: #aaa;
			border: 8px solid #666;
			margin: 20px auto;
			padding: 20px;
		}
		ul li {
			width: auto;
			height: 30px;
		}
		ul li div {
			float: left;
			width: auto;
			height: 30px;
			line-height: 30px;
		}
		ul li div.msg p {
			width: 200px;
			background: red;
			margin-left: 10px;
			padding-left: 5px;
			display: none;
		}
		ul li div input {
			width: 200px;
			height: 30px;
		}
		.submit {
			width: auto;
			height: 30px;
			padding: 0px 30px;
			margin-top: 10px;
		}
		
	</style>
	<script type="text/javascript">
		function check(str){
			var preg = /^\d{1,2}$/;
			var error = document.getElementById("error");
			if(preg.exec(str)){
				error.style.display = "none";
			}else{
				error.style.display = "block";
				error.innerHTML = "输入有误";
			}
		}
	</script>
</head>
<body>
	
	<div id="form">
		<form action="" method="post">
			<ul>
				<li>
					<div class="input">
						<label for="age">年龄：</label>
						<input type="text" name="age" id="age" onblur="check(this.value)" />
					</div>
					<div class="msg">
						<p id="error">测试</p>
					</div>
				</li>
				<li><input class="submit" type="submit" value="提交" onclick="return false;" /></li>
			</ul>
			
		</form>
	</div>
	
</body>
</html>

<?php
//perl兼容preg模式

//定界符
$str = "hudunwang.099com";
$preg = "/\D+/is";
if(preg_match($preg, $str ,$arr)){
	echo "找到了";
	var_dump($arr);
}else{
	echo "没找到";
}






























?>