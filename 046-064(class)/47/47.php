<?php
/*
 * 对象产生的步骤
 * 1、在内容中开辟出对象的空间
 * 2、执行构造方法
 * 3、将对象的引用地址返回
 * */

class People{
	public $name;
	public $height;
	function __construct($n,$h){
		$this->name = $n;
		$this->height = $h;
	}
	function shuohua(){
//		echo "说话……";
		echo $this->name.$this->height;
	}
//	$this 当前对象
}

$lihai = new People("李海","3m");
//echo $lihai->name;
$lihai->shuohua();

$liming = new People("李明","1.78m");
$liming->shuohua();

/*
$xiaoming = new Ren();
$xiaoming->xinming = "小明";
$xiaoming->sengao = "1.78m";
//echo $xiaoming->xinming.$xiaoming->sengao;
$lisi = $xiaoming;
$xiaoming->xinming = "张明明";
echo $lisi->xinming;
*/














































?>