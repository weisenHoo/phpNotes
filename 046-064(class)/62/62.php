<?php
/*
 * get_object_vars($obj) 获取对象属性，以关联数组形式返回
 * get_parent_class([$obj][class[string]]) 闯入对象或者类名，获得父类
 * is_subclass_of($obj,$classname) 判断一个对象是否是参数2的类的子类所实例化的，如果是则返回真，否则返回假
 * interface_exists 检查接口是否已经定义
 * 
 * */

class study{
	public $name;
	public $age;
	public $sex;
	public $city;
	
	function __construct($name,$age,$city,$sex){
		$this->name = $name;
		$this->age = $age;
		$this->city = $city;
		
		$this->sex = ($sex=='女')?'她':'他';
	}
	
	function say(){
		echo "学生：{$this->name}的年龄是{$this->age}，{$this->sex}来自{$this->city}。";
	}
}

class HdwStudy extends study{
	public $number;
	function video(){
		echo "{$this->name}在收看后盾网视频";
	}
}

$lisi = new HdwStudy('李四',31,'南京','男');
//$lisi->say();
//echo "<pre>";
//print_r(get_object_vars($lisi));
//echo get_parent_class($lisi);
//echo is_subclass_of($lisi,'study');

interface channel{
	function edit();
	function add();
}
class arc implements channel{
	function edit(){
		echo "修改文章栏目";
	}
	function add(){
		echo "添加文章栏目";
	}
}
echo interface_exists('channel');


































?>