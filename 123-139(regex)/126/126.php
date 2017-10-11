<?php
/*
 * 不缓存模式及正则注释规则
 * 
 * */



$houdunwang = <<<str
	<html>
		<body>
			<h1>后盾网视频教程：http://www.houdunwang.com</h1>
			<h2>后盾网论坛：http://bbs.houdunwang.com</h2>
			<h3>后盾网PHP课程</h3>
			<h4>后盾网HTML课程</h4>
			<h5>后盾网JAVASCRIPT课程</h5>
			<h6>后盾网DIV+CSS课程</h6>
		</body>
	</html>
str;

/*
$preg = "/(?:www|bbs)\.houdunwang((?:\.)(?:com|cn|net))/is";
preg_match_all($preg, $houdunwang, $arr);
var_dump($arr);
*/

$preg = "/<(h\d{1})>(?#写注释).*?<\/(\\1)>/is";
preg_match_all($preg, $houdunwang, $arr);
var_dump($arr);

//echo $houdunwang;






























?>