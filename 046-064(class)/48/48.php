<?php
 /*
 class Course{
 	public $webName;
	public $webUrl;
	function __construct($n,$u){
		$this->webName = $n;
		$this->webUrl = $u;
	}
	function web(){
		echo "���֣�".$this->webName;
		echo "<br/>";
		echo "��ַ��".$this->webUrl;
	}
 }
 
 $houdunwang = new Course("�������̳","bbs.houdunwnag.com");
 $houdunwang->web();
 
 echo "<br/>";
 
 $hdw = new Course("�����","www.houdunwnag.com");
 $hdw->web();
 */
 
/*
 * ������ͷ�
 * 1�����ǵĽű�ִ����ɺ��ͷŶ���
 * 2��ɾ����������ã��ͷŶ���
 * */
 
class TV{
	public $color;
	public $brand;
	function __construct(){
//		$this->look();
	}
	function look(){
		echo "�����ӡ���";
	}
	function __destruct(){
		echo "�ͷŶ���";
	}
}
 
$d1 = new TV();
$d2 = $d1;
unset($d1);
unset($d2);
echo "<br/>===========================================================<br/>";


/*
 * ������������ԣ����󡢷�װ���̳С���̬
 * 	���󣺰�һ��ԵĹ�ͬ���Ժͷ�������������γ��࣬����˼����ʽ���ǳ���
 * 	��װ���ѳ�Ա�����ͳ�Ա���Է�װ�����У��������Ժͷ��������ط���ʵ�ֵ�ϸ�ڣ�ͨ��public protected private final static �޶����Ա�ķ���Ȩ�ޣ����ݱ��������ڲ���
 * 		   ֻ��ͨ������Ȩ�ĳ�Ա�����ſ��Բ����������ܵĶԳ�Ա���з�װ
 * 	�̳У�����ʹһ����̳в�ӵ����һ���Ѿ�������ĳ�Ա���Ժͷ��������̳е����Ϊ�������࣬�̳���Ϊ���ࡣextends �ؼ��� ʵ�ֲ��̳й�ϵ
 * 	��̬������̳и��࣬ͨ���Ը���ķ�����дʵ�ֶ�̬
 * */

class Arc{
	function del($id){
		echo "ɾ������{$id}";
	}
	function edit($id){
		echo "�༭����{$id}";
	}
}
class ArcInfo extends Arc{
	
}
class ArcNews extends Arc{
	function del($id){
		echo "<br/>";
		echo "ɾ����������{$id}";
		echo "<br/>";
		echo "ɾ����������{$id}";
	}
}
class ArcPic extends Arc{
	function del($id){
		echo "<br/>";
		echo "������ɾ��ͼ��{$id}<br/>";
		echo "��ͼƬ��ַ��{$id}<br/>";
	}
}
$info = new ArcInfo();
$info->del(2);
//$info->edit(2);
$arc = new ArcNews();
$arc->del(3);
$pic = new ArcPic();
$pic->del(67);


































?>