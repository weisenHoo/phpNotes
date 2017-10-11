<?php
/*
 * glob ��������ʽ���أ�����1���Ŀ¼���������ݣ�����ָ�����صľ�������
 * rewinddir ����Ŀ¼ָ�뵽��ͷ
 * opendir ��һ��Ŀ¼���������Ӿ��
 * readdir ��ȡ��ǰֵָ��ָ���ݣ�ͬʱָ�����ƣ���������������FALSE
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