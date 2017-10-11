<?php
/*
 * file_get_contents 一次性读取文件内容
 * file_put_contents 一次性写入文件内容
 * fgetc 传入文件操作句柄，获得字符
 * fgets 传入文件操作句柄，每次获得一行内容，第一个参数是：文件操作句柄，第二个参数是：行在大小
 * fgetss 每次读取一行内容，过滤掉HTML和PHP标签，第三个参数指定保留的标签
 * 
 * */


$file = fopen('a.txt', 'r');
 /*
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
*/
/*
while(!feof($file)){
	echo fgets($file)."<br/>";
}
*/

$httpFile = file_get_contents("http://www.houdunwang.com");
file_put_contents("houdunwang.html",$httpFile);






























?>