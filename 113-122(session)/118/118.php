<?php
/*
 * 提高SESSION处理效率及分层目录结构保存SESSION
 * 
 * */


session_save_path("2;./tmp");
session_start();
$_SESSION['webname'] = "后盾网论坛";
$_SESSION['weburl'] = "bbs.houdunwang.com";
echo session_id();

/*
$dir = "0123456789abcdefghijklmnopqrstuvwxyz";

for($i=0;$i<strlen($dir);$i++){
	for($j=0;$j<strlen($dir);$j++){
		$dir_name = "./tmp/".$dir[$i]."/".$dir[$j];
		if(!file_exists($dir_name)){
			mkdir($dir_name,0777,TRUE) && print ("目录：{$dir_name}创建成功！<br/>");
		}
	}
}
*/








































?>