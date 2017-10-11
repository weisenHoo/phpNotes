<?php
/*
 * 删除目录 删除指定类型文件
 * 
 * */

/*
array_map('unlink',glob('./a/*.*'));
rmdir('a');
*/

/*
function delDir($dirName){
	$dir = opendir($dirName);
	while( ($file=readdir($dir)) !== FALSE){
		$fileName = $dirName.DIRECTORY_SEPARATOR.$file;
		if( $file!='.' && $file!='..'){
			if(is_dir($fileName)){
				delDir($fileName);
			}elseif(is_file($fileName)){
				unlink($fileName);
			}
		}			
	}
	closedir($dir);
	rmdir($dirName);	
}
delDir('a');
*/

/*
function delDir_glob($dirName){
	$dirArr = glob($dirName.'/*');
	$rows = array();
	foreach($dirArr as $v){
		if(is_dir($v)){
			delDir_glob($v);
		}elseif(is_file($v)){
			unlink($v);
		}
	}
	rmdir($dirName);
}

delDir_glob('a');
*/

function delFile($dirName,$fileType){
	$dir = opendir($dirName);	
	while( ($file = readdir($dir)) != FALSE){
		$fileName = $dirName.DIRECTORY_SEPARATOR.$file;
		if( $file != '.' && $file != '..'){
			if(is_dir($fileName)){
				delFile($fileName,$fileType);
			}
			if(!is_array($fileType)){
				$type[] = $fileType;
			}else{
				$type = $fileType;
			}
			if(is_file($fileName) && in_array(strrchr($fileName,'.'), $type)){
				unlink($fileName);
			}
		}
	}
	closedir($dir);
//	rmdir($dirName);
}

delFile('a',array('.php','.txt'));




































?>