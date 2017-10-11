<?php
/*
 * 文件指针控制
 * fseek  在文件指针中定位
 * 		SEEK_SET - 设定位置等于 offset 字节。	
 * 		SEEK_CUR - 设定位置为当前位置加上 offset。
 * 		SEEK_END - 设定位置为文件尾加上 offset。
 * 
 * rewind 倒回文件指针的位置
 * ftell  返回文件指针读/写的位置
 * feof 测试文件指针是否到了文件结束的位置
 * fpassthru 输出文件指针处的所有剩余数据
 * 
 * */

$file = fopen('a.txt','r');
/*
$arr = array();
while(!feof($file)){
	$arr[] = fgets($file);
}
echo "<pre>";
print_r($arr);
*/

fseek($file,20);
fseek($file,50,SEEK_CUR);
echo fpassthru($file);














































?>