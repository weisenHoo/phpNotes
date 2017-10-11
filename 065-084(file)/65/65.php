<?php
/*
 * disk_total_space 获得磁盘总空间
 * disk_free_space 获得磁盘已用空间
 * basename 返回路径中的文件部分
 * dirname 返回路径中的目录部分
 * file_exists 判断文件或目录是否存在
 * filetype 检测文件类型 dir file
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
	die("配置文件config.php不存在，程序无法运行，请到官方得到技术支持");
}else{
	echo "文件存在";
}

if(!file_exists('uploads')){
	echo "上传目录不存在，无法保存图片";
}
*/

//echo filetype("upload");
































?>