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
		echo "后盾网免费视频教程";
	}
	function b(){
		echo "php视频教程";
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
		echo "链接数据库";
	}
	function _getTable(){
		echo "获得表名";
	}
	function _getFields(){
		echo "获取字段列表";
	}
	function _insert(){
		echo "插入数据";
	}
	function _update(){
		echo "更新数据";
	}
	
	function __toString(){
		$method = implode("<br/>", get_class_methods(__CLASS__));
		$vars = get_object_vars($this);
		$str='';
		foreach($vars as $k=>$v){
			$str.=$k.'=>'.$k."<br/>";
		}
		return "<h4>类名是：</h4>".__CLASS__."&nbsp;&nbsp;<h4>属性是：</h4>{$str}&nbsp;&nbsp;<h4>方法是：</h4>{$method}";
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