<?php
header("Content-type: text/html; charset=utf-8");

/*
	break;
		语法结构：break int;
		while     do_while     for     foreach     switch
		break 数字：直接跳出几层循环
		
	continue; 直接运行到循环体结尾
	continue 数字：跳出几层循环到循环体结尾
	
	exit die;
	
		
 
 
*/

/*
$i = 1;
while(true){
	echo "后盾网___{$i}<br/>";
	$i++;
	if($i == 10){
		break;
	}
}


$i = 0;
$j = 0;

while($i++<10){
	echo '$i='.$i;
	while($j++<5){
		if($j==2){
			break 2;
		}
		echo '&nbsp;&nbsp;$j='.$j;
	}
	echo '<br/>';
}
*/

/*
$i = 0;
$j = 0;
while($i++<5){
	if(++$j==2){
		continue;
	}
	echo '$i='.$i.'<br/>';
}


$a = 0;
$b = 0;
while(++$a<3){
	echo '$a='.$a;
	while(++$b<4){
		if($b==2){
			continue 2;
		}
		echo '&nbsp;&nbsp;$b='.$b;
	}
//	echo '_____________________________'.$b;
	$b = 0; 
	echo '$a='.$a;
	echo '<br/>';
}



for($c=1;$c<5;$c++){
	if($c==2){
		continue;
	}
	echo $c."<br/>";
}
*/

exit('立即退出');
die('退出');
echo "后盾网视频教程分享平台";






























?>