<?php
/*
 * 对象 abstract抽象方法说明与使用方式场合
 * 
 * */

abstract class Transportation{
	private $name;//名称
	private $price;//价格
	private $brand;//品牌
	private $cargoVolume;//载货量
	
	function __construct(){
		echo $this->yundong();
	}
	
	abstract function yundong();
}

class Moto extends Transportation{
	function yundong(){
		return "2个轮子在路上走";
	}
}
class Car extends Transportation{
	function yundong(){
		return "4个轮子在路上跑";
	}
}
class Plane extends Transportation{
	function yundong(){
		return "在天上飞";
	}
}
class Ship extends Transportation{
	function yundong(){
		return "在水上航行";
	}
}

$car = new Ship();










































?>