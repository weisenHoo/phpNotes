<?php
/*
 * get_class ��ȡ��������������ִ�Сд������ڷ����е��ÿ���ʡ�Զ���
 * get_declared_classes ��������ʽ���ص�ǰ�ű��ж������
 * get_declared_interfaces ��������ʽ���ص�ǰ�ű��еĽӿ�
 * 
 * */

class Ren{
	function __construct(){
		echo get_class();
	}
}
$lisi = new ren();

echo "<pre>";
//print_r(get_declared_classes());
print_r(get_declared_interfaces());











































?>