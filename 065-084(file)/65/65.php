<?php
/*
 * disk_total_space ��ô����ܿռ�
 * disk_free_space ��ô������ÿռ�
 * basename ����·���е��ļ�����
 * dirname ����·���е�Ŀ¼����
 * file_exists �ж��ļ���Ŀ¼�Ƿ����
 * filetype ����ļ����� dir file
 * pow
 * round
 * 
 * */

/*
$totalSpace =  round(disk_total_space('.')/pow(1024,3),1)."G";
$freeSpace = round(disk_free_space('/')/pow(1024,3),1)."G";
echo $freeSpace;
*/

/*
echo __FILE__;
echo "<br/>";
echo trim(strrchr(__FILE__,DIRECTORY_SEPARATOR),DIRECTORY_SEPARATOR);
echo "<br/>";
echo basename(__FILE__,'.php');

echo "<br/>";

echo substr(__FILE__,0,strpos(__FILE__,basename(__FILE__))-1);
echo "<br/>";
echo dirname(dirname(__FILE__));
*/

/*
if(!file_exists('config.php')){
	die("�����ļ�config.php�����ڣ������޷����У��뵽�ٷ��õ�����֧��");
}else{
	echo "�ļ�����";
}

if(!file_exists('uploads')){
	echo "�ϴ�Ŀ¼�����ڣ��޷�����ͼƬ";
}
*/

//echo filetype("upload");
































?>