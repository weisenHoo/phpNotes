<?php
/*
 * method_exists 判断方法是否存在，第一个参数对象或类名，第二个参数就是方法
 * property_exists 判断对象或类中是否有该属性，第一个参数可以是对象或类名，第二个参数为属性名
 * instanceof 判断对象是否是某一个所实例化的
 * 
 * */
class index{
	function index(){
		echo "后台登录首页<br/>";
	}
}
class ArcChannel{
	public $name;
	public $id;
	
	function index(){
		echo "显示栏目列表";
	}
	function del(){
		echo "删除栏目";
	}
	function add(){
		echo "追加栏目";
	}
}
/*
$action = isset($_GET['a'])?$_GET['a']:'index';
$medhod = isset($_GET['m'])?$_GET['m']:'index';

$obj = new $action();
if(method_exists($obj,$method)){
	$obj->$medhod();
}else{
	die("非法调用，方法不存在");
}
*/

//echo property_exists('ArcChannel','id');

























?>