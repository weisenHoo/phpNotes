<?php
/*
 * ��������Ĳ���
 * 1���������п��ٳ�����Ŀռ�
 * 2��ִ�й��췽��
 * 3������������õ�ַ����
 * */

class People{
	public $name;
	public $height;
	function __construct($n,$h){
		$this->name = $n;
		$this->height = $h;
	}
	function shuohua(){
//		echo "˵������";
		echo $this->name.$this->height;
	}
//	$this ��ǰ����
}

$lihai = new People("�","3m");
//echo $lihai->name;
$lihai->shuohua();

$liming = new People("����","1.78m");
$liming->shuohua();

/*
$xiaoming = new Ren();
$xiaoming->xinming = "С��";
$xiaoming->sengao = "1.78m";
//echo $xiaoming->xinming.$xiaoming->sengao;
$lisi = $xiaoming;
$xiaoming->xinming = "������";
echo $lisi->xinming;
*/














































?>