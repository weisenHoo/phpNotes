<?php
/*
	asort(); �����鰴ֵ���򣬱�������
	ksort(); �����鰴�������򣬱�������
	rsort(); ��������з������򣬲���������
	arsort(); ��������з������򣬱�������
	krsort(); ������ļ������з������򣬱�������
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

$arr = array(
	"bbs_url"=>"bbs.houdunwnag.com",
	"web_url"=>"www.houdunwang.com",
	"bbs_name"=>"����������Ƶ����ƽ̨",
	"www.name"=>"�����PHP��Ŀ������LINUXά����DIVCSS��׼�����֣���Դ��Ʒ���ο�����HDCMS����"
);
//asort($arr);
//ksort($arr);
//rsort($arr);
//arsort($arr);
krsort($arr);
dump($arr);


































?>