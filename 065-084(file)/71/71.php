<?php
/*
 * �ж��ļ�������ļ� 
 * fopen 
 * fread 
 * fclose  
 * is_executable �ж�һ���ļ��Ƿ��ǿ�ִ���ļ�������BOOL����
 * is_readable �ж��ļ��Ƿ�ɶ�������BOOL����
 * is_writeable �ж��ļ��Ƿ��д������BOOL����
 * 
 * */

/*
if(is_executable('Photoshop.exe') != FALSE){
	echo "����ļ���һ����ִ���ļ�&nbsp;���Ĵ�С��".round(filesize('Photoshop.exe')/pow(1024,2),2)."MB";
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