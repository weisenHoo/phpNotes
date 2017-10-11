<?php
/*
 * rename 改变文件夹或者文件的名称
 * scandir 显示文件夹内的所有内容，返回为数组，包括. 与..
 * 
 * */

//var_dump(rename('60','111'));

/*
$dirArr = scandir('.');
echo "<pre>";
print_r($dirArr);
*/

/*
//getcwd 获得当前操作目录
//chdir 更改当前操作目录

echo getcwd();
echo "<br/>";
echo strrchr(getcwd(), DIRECTORY_SEPARATOR);
echo "<br/>";
echo str_replace(strrchr(getcwd(), DIRECTORY_SEPARATOR), '', getcwd());
*/

/*
$dir = scandir('.');
foreach($dir as $v){
	$base = strrchr($v, '.');
	if($v!=='.'){
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
		echo "<img src='./ico/{$type}.png' width='20' />&nbsp;{$v}<br/>";
	}		
}
*/


//$dir = "dsf.sdfsf.sfd.php";
//echo strrchr($dir,'.');


chdir('../46-64(class)/60');
function scand($dir){
	static $i = 0;
	static $d = 0;
	$dirInfo = scandir($dir);
	echo "<ul>";
	foreach($dirInfo as $v){
		$base = strrchr($v, '.');
		if($v!=='.' && $v!=='..'){
			$dirName = $dir.DIRECTORY_SEPARATOR.$v;
			if(is_dir($dirName)){
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
			if(is_dir($dirName)){
				echo "<ul>";
				scand($dirName);
				$count['dir'] = ++$d;
				echo "</ul>";
			}
			$count['file'] = ++$i;
		}			
	}
	echo "</ul>";
	return $count;	
}


$count = scand('.');
echo "<h1>一共有内容：".$count['file']."个</h1>";
echo "<h1>其中文件夹有{$count['dir']}个</h1>";
































?>