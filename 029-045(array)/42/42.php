<?php
/*
	array_reduce(); �ûص������ݹ�ĵĶ�����Ԫ�ؽ��д������ش�����ֵ
	array_slice(); ��ȡָ����Χ������Ԫ�أ��ڶ���������ȡ��ʼλ�ã�������������ȡ���ȣ����ĸ������Ǳ�����������ֵ
	array_splice(); ɾ��ָ����Χ������Ԫ�أ����ָ�����ĸ�����������ɾ��Ԫ�ص�λ�÷�����ĸ�����ֵ
	array_sum(); �������е�ֵ�����������
	array_product(); �������е�ֵ���г˻�����
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr = array(1,2,3,4,5);
function a($c,$i){
	$c.='===='.$i;
	return $c;
}
echo array_reduce($arr,"a");
*/

/*
$arr = array(1,2,3,4,5);
$newArr = array_slice($arr,2,1,TRUE);
dump($newArr);
*/

/*
$arr = array(1,2,3,4,5);
$values = array('�����','bbs.houdunwnag.com');
$newArr = array_splice($arr,2,1,$values);
dump($arr);
dump($newArr);
*/

$arr = array(1,2,3,4,5);
//$newArr = array_sum($arr);
$newArr = array_product($arr);
dump($newArr);







































?>