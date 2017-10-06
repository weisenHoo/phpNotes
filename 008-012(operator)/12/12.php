<?php
header("Content-type: text/html; charset=utf-8");


/*
//运算符的短路
	&&	逻辑与	||	逻辑或	存在短路
	&	按位与	|	按位或	不存在短路



*/

$a = 1;
/*
$a==2 || $c=100;
//第一个表达式返回一个TRUE 1		第二个表达式是一个赋值表达式，生成变量$c


$b = $a == 2 && $c = 100;
var_dump($b);
echo '$c等于'.$c;


$a = 2;
$a == 3 & $c = 500;
echo '$c等于'.$c;

$a = 2;
$a == 3 | $c = 500;
echo '$c等于'.$c;
*/

//$file = @fopen('a1.txt','r') or die("文件不存在");
$file = @fopen('a.txt','r') or die("文件不存在");
$content = fread($file,filesize('a.txt'));
echo $content;













































?>