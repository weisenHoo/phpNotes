<?php
header("Content-type: text/html; charset=utf-8");

/*
	字符串处理函数
		parse_url(); 解析URL，返回其组成部分	
		urlencode(); url编码
		urldecode(); 解码 已编码的内容
		htmlentities(); 将字符串转化为html实体 
			参数1：操作内容
			参数2：转换规则 ENT_COMPAT(只转换双引号) ENT_QWUOTES(转换单双引号) ENT_NOQUOTES(不转换任何引号)
			参数3：
		htmlspecialchars(); 将字符串转化为HTML实体，不处理中文
		htmlspecialchars_decode(); 将已经转换为HTML实体的内容，转换为字符串
*/

/*
$url = "http://www.houdunwnag.com/admin/index.php?m=channel&a=add";
$arr = parse_url($url);
echo "<pre>";
print_r($arr);
echo "<br/>".parse_url($url,PHP_URL_PATH)."<br/>";
echo $arr["host"];
*/

/*
//$str = "后盾网视频教程";
$str = "后盾网PHP课程&div+css课程";
echo "<a href='26.php?h=".urlencode($str)."'>后盾网</a><br/>";
echo $_GET["h"];
*/

/*
$str = "后盾网视频教程";
echo urlencode($str);
echo "<br/>";
echo urldecode(urldecode($str));
*/

/*
//$str = "<h1>bbs.houdunwang.com</h1>";
//$str = 'www.houdunwang.com"PHP div"';
$str = '<h1>www.houdunwang.com后盾网视频教程<h1>';
echo $str;
echo "<br/>";
echo htmlentities($str,ENT_COMPAT);
echo "<br/>";
echo htmlspecialchars($str);
*/

$str = htmlspecialchars(isset($_GET["uname"])?$_GET["uname"]:"");
echo $str."<br/>";
echo htmlspecialchars_decode($str);
?>
<form action="" method="get">
	输入姓名：<input type="text" name="uname" />
	<input type="submit" value="提交" />
</form>
<?php

























?>