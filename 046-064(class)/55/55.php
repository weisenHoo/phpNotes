<?php
/*
 * ���� abstract���󷽷�˵����ʹ�÷�ʽ����
 * 
 * */

abstract class Transportation{
	private $name;//����
	private $price;//�۸�
	private $brand;//Ʒ��
	private $cargoVolume;//�ػ���
	
	function __construct(){
		echo $this->yundong();
	}
	
	abstract function yundong();
}

class Moto extends Transportation{
	function yundong(){
		return "2��������·����";
	}
}
class Car extends Transportation{
	function yundong(){
		return "4��������·����";
	}
}
class Plane extends Transportation{
	function yundong(){
		return "�����Ϸ�";
	}
}
class Ship extends Transportation{
	function yundong(){
		return "��ˮ�Ϻ���";
	}
}

$car = new Ship();










































?>