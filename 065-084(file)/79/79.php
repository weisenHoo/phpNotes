<?php
/*
 * flock ������ѯ�ļ�����
 * 		LOCK_SH ȡ�ù�����������ȡ�ĳ��򣩡�
 * 		LOCK_EX ȡ�ö�ռ������д��ĳ���
 * 		LOCK_UN �ͷ����������۹�����ռ��
 * 
 * pathinfo ��������ʽ�������ļ�·������Ϣ
 * realpath ���ع淶���ľ���·����
 * tmpfile ����һ����ʱ�ļ�
 * tempnam ����һ������Ψһ�ļ������ļ�
 * 
 * */

/*
$arr = pathinfo("../78/a.txt");
echo "<pre>";
print_r($arr);

echo "<br/>";
echo realpath($arr['dirname']);

echo "<br/>";
echo dirname(__FILE__);
echo "<br/>";
echo realpath('.');
*/

$fileName = tempnam(".",'ho-');
echo $fileName;









































?>