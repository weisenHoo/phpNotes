<?php
/*
 * ������ʽ_�ظ�ƥ��2 ��֤�ֻ����� �û���
 * 
 * PHP��try{}catch{}�����������������쳣������Ϊ�����ռ�����ʾ��������Ϣ��
 * throw new Exception�׳��쳣�Ľ��� 
 * 
 * */

/*
$str = "houdunwang.com";
$preg = "/houd+/is";

try{
	if(preg_match($preg, $str, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("ƥ��ʧ��");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/

/*
$email = "houdunwang.a@qq.com";
$preg = "/^(\w+)(\.\w+)*@(\w+)\.(com|net|cc|info|so|org)$/is";
if(preg_match($preg, $email, $arr)){
	var_dump($arr);
}else{
	echo "ƥ��ʧ��";
}
*/

/*
$str = "baiiiiiidu.com";
$preg = "/bai?/is";
try{
	if(preg_match($preg, $str, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("ERROR!");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/


//��֤�Ƿ�Ϊһ������

$str = -8766;
$preg = "/^-?\d+(\.?\d+)*$/is";
if(preg_match($preg, $str, $arr)){
	var_dump($arr);
}else{
	echo "ƥ��ʧ��";
}


























?>