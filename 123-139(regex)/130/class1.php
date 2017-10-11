<?php



interface car{
	function run();
}


class bmw implements car{
	function run(){
		echo "宝马车在跑";
	}
}


class BZ implements car{
	function run(){
		echo "奔驰车在跑";
	}
}


$bmw = new bmw();
$bmw->run();


























?>