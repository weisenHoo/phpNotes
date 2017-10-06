<?php
header("Content-type: text/html; charset=utf-8");

/*
	do...while语句
		do{
			代码段
		}while(表达式);
		特点:最少会执行一次代码段
		
	for循环
		for(表达式1初始化值;表达式2条件判断语句;表达式3增量){
			代码段
		}
		第一次执行：表达式1->表达式2(TRUE)->代码段->表达式3
		第二次执行：表达式1->表达式2(TRUE)->代码段->表达式3
		……
		特点：
			1、当明确知道循环次数时，经常用在已了解循环次数的情况
			2、在for循环中一次将初始值，表达式，增量定义，条理清晰	
			3、for循环支持嵌套
*/

/*
$i = 5;
do{
	echo $i;
	$i++;
}while($i<10);


$i = 1;
do{
//	$a+=$i;
	$a = $a + $i;
	$i++;
}while($i<=100);
echo $a;


for($i=1;$i<3;$i++){
	echo $i."<br/>";
}


$c = true;
$a = 0;
for($i=1;$c;$i++){
	if($i>100){
//		$c = false;
		break;
	}
	$a+=$i;
	echo $a."<br/>";
}
*/

//作业
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $i.'x'.$j.'='.$i*$j.'&nbsp;&nbsp;&nbsp;';
	}
	echo '<br/>';
}


































?>