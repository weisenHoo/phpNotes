<?php
/*
 * __clone  
 * __toString 
 * __call
 * 
 * */

 /*
class a{
	public $num = 1;
	function _a(){
		echo "����������Ƶ�̳�";
	}
	function b(){
		echo "php��Ƶ�̳�";
	}
	function __clone(){
		$this->num++;
	}
}
$c = new a();
$d = $c;

$e = clone $c;
echo $e->num;
*/

/*
class db{
	private $host;
	private $user;
	private $pwd;
	private $dbname;
	
	function __construct($host,$user,$pwd,$dbname){
		$this->host = $host;
		$this->user = $user;
		$this->pwd = $pwd;
		$this->dbname = $dbname;
	}
	
	function _con(){
//		$mysqli = new mysqli($this-host,$this->user,$this->pwd,$this->dbname);
		echo "�������ݿ�";
	}
	function _getTable(){
		echo "��ñ���";
	}
	function _getFields(){
		echo "��ȡ�ֶ��б�";
	}
	function _insert(){
		echo "��������";
	}
	function _update(){
		echo "��������";
	}
	
	function __toString(){
		$method = implode("<br/>", get_class_methods(__CLASS__));
		$vars = get_object_vars($this);
		$str='';
		foreach($vars as $k=>$v){
			$str.=$k.'=>'.$k."<br/>";
		}
		return "<h4>�����ǣ�</h4>".__CLASS__."&nbsp;&nbsp;<h4>�����ǣ�</h4>{$str}&nbsp;&nbsp;<h4>�����ǣ�</h4>{$method}";
	}
}
$arc = new db('localhost','root','','hdcms');
echo $arc;
*/


class f{
	function _f(){
		echo "3333333333333";
	}
	function __call($methodName,$args){
		echo "<pre>";
		print_r($args);
	}
}
$d = new f();
$d->_f1(1,2,3,4,5);









































?>