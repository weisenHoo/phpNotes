<?php
/*
 * file_get_contents һ���Զ�ȡ�ļ�����
 * file_put_contents һ����д���ļ�����
 * fgetc �����ļ��������������ַ�
 * fgets �����ļ����������ÿ�λ��һ�����ݣ���һ�������ǣ��ļ�����������ڶ��������ǣ����ڴ�С
 * fgetss ÿ�ζ�ȡһ�����ݣ����˵�HTML��PHP��ǩ������������ָ�������ı�ǩ
 * 
 * */


$file = fopen('a.txt', 'r');
 /*
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
echo fgetc($file)."<br/>";
*/
/*
while(!feof($file)){
	echo fgets($file)."<br/>";
}
*/

$httpFile = file_get_contents("http://www.houdunwang.com");
file_put_contents("houdunwang.html",$httpFile);






























?>