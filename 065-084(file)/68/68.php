<?php
/*
 * glob 以数组形式返回，参数1这个目录的所有内容，可以指定返回的具体类型
 * rewinddir 返回目录指针到开头
 * opendir 打开一个目录，返回链接句柄
 * readdir 读取当前指值所指内容，同时指针下移，如果到结果，返回FALSE
 * 
 * */

/*
$dirArr = glob('../*');
echo "<pre>";
print_r($dirArr);
*/

/*
function glodDir($dirName,$type=''){
	if($type==''){
		$dirInfo = glob($dirName.'/*');
	}else{
		$dirInfo = glob($dirName.'/*.'.$type);
	}
	return $dirInfo;
}
$info = glodDir('..','php');
echo "<pre>";
print_r($info);
*/


function glodDir($dirName,$type=''){
	if($type==''){
		$dirInfo = glob($dirName.'/*');
	}else{
		$dirInfo = glob($dirName.'/*.'.$type);
	}
	echo "<ul>";
	foreach($dirInfo as $v){
		$base = strrchr($v, '.');
		if(is_dir($v)){
			$type = "dir";
		}elseif($base=='.jpg' || $base=='.gif' || $base=='.png' || $base=='.bmp' || $base=='.jpeg'){
			$type = 'jpg';
		}elseif($base=='.rar' || $base=='.zip' || $base=='.7z'){
			$type = 'zip';
		}elseif($base=='.swf' || $base=='.avi' || $base=='.flv' || $base=='.wmv'){
			$type = 'swf';
		}else{
			$type = 'text';
		}		
		echo "<li style='list-style: none;'><img src='./ico/{$type}.png' width='20' />&nbsp;".$v."</li>";	
		if(is_dir($v)){
			glodDir($v);
		}
	}
	echo "</ul>";
}

glodDir($_SERVER['DOCUMENT_ROOT']);

/*
$dir = opendir('..');
while($file = readdir($dir)){
	echo $file."<br/>";
}
echo readdir($dir);
*/
































?>