<?php
/*
 * is_dir 判断是否为一个目录
 * mkdir 创建目录，第一个参数指定目录名，第二个参数 目录权限，第三个参数为TRUE则递归创建
 * getcwd 获得当前操作目录
 * chdir 更改当前操作目录
 * rmdir 删除目录
 * 
 * */

//var_dump(is_dir('../65'));

//mkdir('./template/default/image/1/2/3/4/5',0777,true);
//$dir = array("images","html","cache","js");
//array_map(mkdir, $dir);
/*
$dirName = 'uploads/'.date("Y-m-d",time());
if(!file_exists($dirName)){
	mkdir($dirName);
}
*/

/*
echo getcwd();
chdir('../65');
$webArr = include "b.php";
echo "<pre>";
print_r($webArr);
sleep(10);
mkdir('ccccccccc');
*/

if(file_exists('../65/upload/mp3')){
	rmdir('../65/upload/mp3');
	echo "<script>alert('目录删除成功')</script>";
}







































?>