<?php
/*
 * ���� interface�ӿ�˵����ʹ�÷�ʽʵ��
 * */

 /*
interface bing{	
	//�������
	function sengao();
	//��������
	function sili();
	//�������
	function zengzi();
	//�β����
	function ganyian();
}
//����
class bubing implements bing{
	function sengao(){
		return "1.8m";
	}
	function sili(){
		return "5.0";
	}
	function zengzi(){
		return "YES";
	}
	function ganyian(){
		return "NO";
	}
}
//�վ�
class kongjun implements bing{
	function sengao(){
		return "2m";
	}
	function sili(){
		return "4.5";
	}
	function zengzi(){
		return "YES";
	}
	function ganyian(){
		return "NO";
	}
}
//����
class haijun implements bing{
	function sengao(){
		return "1.7m";
	}
	function sili(){
		return "3.0";
	}
	function zengzi(){
		return "YES";
	}
	function ganyian(){
		return "NO";
	}
}

$bing = new kongjun();
echo "��ߣ�".$bing->sengao()."<br/>";
echo "������".$bing->sili()."<br/>";
echo "����".$bing->zengzi()."<br/>";
echo "�β���".$bing->ganyian()."<br/>";
*/


interface Usb{
	function connect();
	function quit();
}
interface caxianban{
	const DIANYA = '220v';
	function caru();
	function bacu();
}
//������������ڵ��� ����ͼƬ�������  U�� 1װ���� 2�������  �ֻ����ڵ��� ���
class souji implements Usb,caxianban{
	function connect(){
		echo "�ֻ��ڳ�磬��ʾ�ֻ�����";
	}
	function quit(){
		echo "�ֻ�ֹͣ��磬�˳�";
	}
	function caru(){
		echo "�ֻ�ͨ��".self::DIANYA."���߰���";
	}
	function bacu(){
		echo "�ֻ��ϵ�γ����뿪".self::DIANYA."���߰�";
	}
}
class xiangji implements Usb{
	function connect(){
		echo "����鵽usb���ˣ���ʾͼƬ";
	}
	function quit(){
		echo "����˳�";
	}
}
class cxb{
	function caru($obj){
		$obj = new $obj();
		$obj->caru();
	}
	function bacu($obj){
		$obj = new $obj();
		$obj->bacu();
	}
}
$cxb = new cxb();
$cxb->bacu('souji');
echo "<br/>";
class PC{
	function usbConnect($usb){
		$obj = new $usb();
		$obj->connect();
		$obj->quit();
	}
	function usbQuit($usb){
		$obj = new $usb();
		$obj->quit();
	}
}

$sony = new PC();
$sony->usbConnect("xiangji");
echo "<br/>";


/*
//���¹���  ������Ϣ��Ŀ  ��̳����  �̳���Ŀ  ͼƬ��Ŀ
interface Channel{
	function edit();
	function del();
}
class ArcChannel implements Channel{
	function edit(){
		echo "������Ŀ����";
	}
	function del(){
		echo "������Ŀɾ��";
	}
}
class InfoCjanel implements Channel{
	function edit(){
		echo "������Ϣ��Ŀ����";
	}
	function del(){
		echo "������Ϣ��Ŀɾ��";
	}
}
class Admin{
	function channel($type,$action){
		$channel = new $type();
		$channel->$action();
	}
}
$type = isset($_GET['m'])?$_GET['m']:"ArcChannel";
$action = isset($_GET['a'])?$_GET['a']:"edit";
$admin = new Admin();
$admin->channel($type,$action)
*/








































?>