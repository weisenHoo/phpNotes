<?php
/*
 * method_exists �жϷ����Ƿ���ڣ���һ������������������ڶ����������Ƿ���
 * property_exists �ж϶���������Ƿ��и����ԣ���һ�����������Ƕ�����������ڶ�������Ϊ������
 * instanceof �ж϶����Ƿ���ĳһ����ʵ������
 * 
 * */
class index{
	function index(){
		echo "��̨��¼��ҳ<br/>";
	}
}
class ArcChannel{
	public $name;
	public $id;
	
	function index(){
		echo "��ʾ��Ŀ�б�";
	}
	function del(){
		echo "ɾ����Ŀ";
	}
	function add(){
		echo "׷����Ŀ";
	}
}
/*
$action = isset($_GET['a'])?$_GET['a']:'index';
$medhod = isset($_GET['m'])?$_GET['m']:'index';

$obj = new $action();
if(method_exists($obj,$method)){
	$obj->$medhod();
}else{
	die("�Ƿ����ã�����������");
}
*/

//echo property_exists('ArcChannel','id');

























?>