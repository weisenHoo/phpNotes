<?php
/*
 * �ļ�ָ�����
 * fseek  ���ļ�ָ���ж�λ
 * 		SEEK_SET - �趨λ�õ��� offset �ֽڡ�	
 * 		SEEK_CUR - �趨λ��Ϊ��ǰλ�ü��� offset��
 * 		SEEK_END - �趨λ��Ϊ�ļ�β���� offset��
 * 
 * rewind �����ļ�ָ���λ��
 * ftell  �����ļ�ָ���/д��λ��
 * feof �����ļ�ָ���Ƿ����ļ�������λ��
 * fpassthru ����ļ�ָ�봦������ʣ������
 * 
 * */

$file = fopen('a.txt','r');
/*
$arr = array();
while(!feof($file)){
	$arr[] = fgets($file);
}
echo "<pre>";
print_r($arr);
*/

fseek($file,20);
fseek($file,50,SEEK_CUR);
echo fpassthru($file);














































?>