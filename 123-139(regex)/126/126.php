<?php
/*
 * ������ģʽ������ע�͹���
 * 
 * */



$houdunwang = <<<str
	<html>
		<body>
			<h1>�������Ƶ�̳̣�http://www.houdunwang.com</h1>
			<h2>�������̳��http://bbs.houdunwang.com</h2>
			<h3>�����PHP�γ�</h3>
			<h4>�����HTML�γ�</h4>
			<h5>�����JAVASCRIPT�γ�</h5>
			<h6>�����DIV+CSS�γ�</h6>
		</body>
	</html>
str;

/*
$preg = "/(?:www|bbs)\.houdunwang((?:\.)(?:com|cn|net))/is";
preg_match_all($preg, $houdunwang, $arr);
var_dump($arr);
*/

$preg = "/<(h\d{1})>(?#дע��).*?<\/(\\1)>/is";
preg_match_all($preg, $houdunwang, $arr);
var_dump($arr);

//echo $houdunwang;






























?>