<?php
/*
 * ħ��������
 * __CLASS__ �õ�����
 * __METHOD__ �õ�������
 * __FUNCTION__ �õ�������
 * __DIR__ �õ���ǰ�ļ��ľ���·��
 * __FILE__ �õ���ǰ�ļ���·��
 * 
 * */

class HouDunWnag{
	function _hdw0(){
		return __CLASS__;
	}
	function _hdw1(){
		return __METHOD__;
	}	
}
$a = new HouDunWnag();
echo $a->_hdw0()."<br>";
echo $a->_hdw1()."<br>";

function _hdw2(){
	echo __FUNCTION__;
	echo "<br/>";
}
_hdw2();

echo __FILE__;
echo "<br/>";

//$path = str_replace('\\', '/', dirname(__FILE__));
$path = dirname(__FILE__);
define("WEBDIR",$path);//��վ��Ŀ¼
define("TEMPLATE", WEBDIR.DIRECTORY_SEPARATOR.'template');//ģ��Ŀ¼
echo TEMPLATE;
echo "<br/>";

echo @$_SERVER[SCRIPT_NAME];

















































?>