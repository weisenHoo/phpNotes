<?php
/*
 * 
 * 
 * */

/*
 * �����ӿ�
 * 
 * */
interface car{
	function run();
}

/*
 * ������
 * 
 * */
class bmw implements car{
	function run(){
		echo "��������";
	}
}

/*
 * ���۳���
 * 
 * */
class BZ implements car{
	function run(){
		echo "���۳�����";
	}
}


$bmw = new bmw();
$bmw->run();


























?>