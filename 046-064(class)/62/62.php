<?php
/*
 * get_object_vars($obj) ��ȡ�������ԣ��Թ���������ʽ����
 * get_parent_class([$obj][class[string]]) ������������������ø���
 * is_subclass_of($obj,$classname) �ж�һ�������Ƿ��ǲ���2�����������ʵ�����ģ�������򷵻��棬���򷵻ؼ�
 * interface_exists ���ӿ��Ƿ��Ѿ�����
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
		
		$this->sex = ($sex=='Ů')?'��':'��';
	}
	
	function say(){
		echo "ѧ����{$this->name}��������{$this->age}��{$this->sex}����{$this->city}��";
	}
}

class HdwStudy extends study{
	public $number;
	function video(){
		echo "{$this->name}���տ��������Ƶ";
	}
}

$lisi = new HdwStudy('����',31,'�Ͼ�','��');
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
		echo "�޸�������Ŀ";
	}
	function add(){
		echo "���������Ŀ";
	}
}
echo interface_exists('channel');


































?>