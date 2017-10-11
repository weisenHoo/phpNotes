<?php
/*
 * 
 * 
 * */

/*
 * 汽车接口
 * 
 * */
interface car{
	function run();
}

/*
 * 宝马车类
 * 
 * */
class bmw implements car{
	function run(){
		echo "宝马车在跑";
	}
}

/*
 * 奔驰车类
 * 
 * */
class BZ implements car{
	function run(){
		echo "奔驰车在跑";
	}
}


$bmw = new bmw();
$bmw->run();


























?>