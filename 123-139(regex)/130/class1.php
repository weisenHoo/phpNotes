<?php



interface car{
	function run();
}


class bmw implements car{
	function run(){
		echo "��������";
	}
}


class BZ implements car{
	function run(){
		echo "���۳�����";
	}
}


$bmw = new bmw();
$bmw->run();


























?>