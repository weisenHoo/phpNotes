<?php
/*
 * rename �ı��ļ��л����ļ�������
 * scandir ��ʾ�ļ����ڵ��������ݣ�����Ϊ���飬����. ��..
 * 
 * */

//var_dump(rename('60','111'));

/*
$dirArr = scandir('.');
echo "<pre>";
print_r($dirArr);
*/

/*
//getcwd ��õ�ǰ����Ŀ¼
//chdir ���ĵ�ǰ����Ŀ¼

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
echo "<h1>һ�������ݣ�".$count['file']."��</h1>";
echo "<h1>�����ļ�����{$count['dir']}��</h1>";
































?>