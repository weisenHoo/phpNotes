<?php
/*
 * 对象 interface接口说明与使用方式实例
 * */

 /*
interface bing{	
	//测量身高
	function sengao();
	//测量视力
	function sili();
	//政治审核
	function zengzi();
	//肝病检测
	function ganyian();
}
//步兵
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
//空军
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
//海军
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
echo "身高：".$bing->sengao()."<br/>";
echo "视力：".$bing->sili()."<br/>";
echo "政审：".$bing->zengzi()."<br/>";
echo "肝病：".$bing->ganyian()."<br/>";
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
//数码相机，插在电脑 弹出图片浏览器，  U盾 1装驱动 2打开浏览器  手机插在电脑 充电
class souji implements Usb,caxianban{
	function connect(){
		echo "手机在充电，显示手机内容";
	}
	function quit(){
		echo "手机停止充电，退出";
	}
	function caru(){
		echo "手机通过".self::DIANYA."插线板充电";
	}
	function bacu(){
		echo "手机断电拔出，离开".self::DIANYA."插线板";
	}
}
class xiangji implements Usb{
	function connect(){
		echo "相机查到usb上了，显示图片";
	}
	function quit(){
		echo "相机退出";
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
//文章管理  分类信息栏目  论坛管理  商城栏目  图片栏目
interface Channel{
	function edit();
	function del();
}
class ArcChannel implements Channel{
	function edit(){
		echo "文章栏目管理";
	}
	function del(){
		echo "文章栏目删除";
	}
}
class InfoCjanel implements Channel{
	function edit(){
		echo "分类信息栏目管理";
	}
	function del(){
		echo "分类信息栏目删除";
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