<?php
header("Content-type: text/html; charset=utf-8");

/*
	get_magic_quotes_runtime(); 获得外部文件及数据库资料时是否进行转义
	set_magic_quotes_runtime(); 设置获得外部文件及数据库资料时是否进行转义
	strip_tags(); 去除HTML XML PHP的标签项
*/

//phpinfo();

/*
set_magic_quotes_runtime(0);
echo get_magic_quotes_runtime();
echo "<hr/>";
*/

/*
$file = @fopen('28_1.txt',r);
$con = fread($file,filesize('28_1.txt'));
echo $con;
*/


$str = '<div style="width: 200px; height: 200px; background-color: #552578;"><span style="color: #f00;">后盾网</span>视频教程</div>';
echo $str;
echo "<br/>";
echo strip_tags($str);
echo "<br/>";
echo strip_tags($str,'<span>');
echo "<br/>";
echo strip_tags($str,'<div>');


















































?>