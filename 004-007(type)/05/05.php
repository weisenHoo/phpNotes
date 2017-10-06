<?php
header("Content-type: text/html; charset=utf-8");

/*
 	布尔型  TRUE  FATSE
	为布尔假型的类型:
		1、FALSE 
		2、0  
		3、0.0  
		4、空字符串为假  
		5、字符串0为假  
		6、NULL为假
		7、空数组为假
	
	除了以上情况，均为真TRUE类型
	
	
$a = 100;
if($a==100){
	echo '$a=100';
}
*/

/*
$name = isset($_GET['uname'])?$_GET['uname']:"";
if($name){
	echo "你的名字是：".$name;
}else{
	echo "亲输入名字，再提交";
}
*/
?>
<!--<html>
	<head></head>
	
	<body>
		<form action="" method="">
			姓名：<input type="text" name="uname"/><br />
			<input type="submit" value="提交" />
		</form>
	</body>
</html>-->


<?php
/*
 数组(array)
 
$url = array("www.sina.com.cn","bbs.houdunwang.com","www.sohu.com","www.taobao.com","www.yahoo.com");
echo $url[0]."<br />";
echo $url[1]."<br />";
echo $url[2]."<br />";
echo $url[3]."<br />";
echo $url[4]."<br />";
var_dump($url);
*/


/*
对象(object)

class hdw{
	public $url = "bbs.houdunwang.com";
	
	function say(){
		echo "欢迎来到后盾网";
	}
}
$obj = new hdw();

//var_dump($obj);

echo $obj->url;
echo "<br/>";
echo $obj->say();

*/


/*
资源(resource)

NULL
*/

//$houdunwang = null;
$houdunwang = "后盾网";
var_dump($houdunwang);
unset($houdunwang);
var_dump($houdunwang);
















































 
?>