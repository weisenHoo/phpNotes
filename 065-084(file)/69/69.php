<?php
/*
 * filesize �õ��ļ���С�����ص�λΪ�ֽ� 
 * unlink ɾ���ļ�
 * 
 * */

/*
echo "<pre>";
print_r(get_declared_classes());


 
$dir = dir('..');
while(($file = $dir->read()) != FALSE){
	echo $file."<br/>";
}
$dir->close();
echo "<hr/>";
$dir->rewind();
while(($file = $dir->read()) != FALSE){
	echo $file."<br/>";
}
*/

//echo filesize('../68/68.php')/1024;

/*
sleep(10);
unlink('1.txt');
*/

/*
sleep(10);
array_map('unlink', glob('./unline/*.*'));//����ɾ���ļ�
*/

/*
function dirSize($dirName){
	$dir = opendir($dirName);	
	while(($file = readdir($dir)) !== FALSE){
		$fileName = $dirName.DIRECTORY_SEPARATOR.$file;
		if($file!='.' && $file!='..'){
			if(is_dir($fileName)){
				@$count += dirSize($fileName);
			}else{
				@$count += filesize($fileName);//$count = $count + filesize($fileName);
			}
		}		
	}
	return @$count;
}
echo dirSize('..')/pow(1024,2);
*/

function dirSize_glob($dirName){
	$dirInfo = glob($dirName.DIRECTORY_SEPARATOR.'*');
	foreach($dirInfo as $v){
		if(is_dir($v)){
			@$count += dirSize_glob($v);
		}else{
			@$count += filesize($v);
		}
	}
	return @$count;
}
echo dirSize_glob('..')/pow(1024,2);












?>