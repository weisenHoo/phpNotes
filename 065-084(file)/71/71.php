<?php
/*
 * 判断文件与操作文件 
 * fopen 
 * fread 
 * fclose  
 * is_executable 判断一个文件是否是可执行文件，返回BOOL类型
 * is_readable 判断文件是否可读，返回BOOL类型
 * is_writeable 判断文件是否可写，返回BOOL类型
 * 
 * */

/*
if(is_executable('Photoshop.exe') != FALSE){
	echo "这个文件是一个可执行文件&nbsp;它的大小是".round(filesize('Photoshop.exe')/pow(1024,2),2)."MB";
}
*/

//$file = fopen('a.txt', 'r');
//echo fread($file,filesize('a.txt'));
//echo fread($file,'10');
//fclose($file);
//echo "<br/>";
//echo fread($file,'10');

$file = fopen('a.txt', 'r+');
fwrite($file, '12345678');
fclose($file);



























?>