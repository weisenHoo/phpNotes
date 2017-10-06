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
		echo "名字：".$this->webName;
		echo "<br/>";
		echo "网址：".$this->webUrl;
	}
 }
 
 $houdunwang = new Course("后盾网论坛","bbs.houdunwnag.com");
 $houdunwang->web();
 
 echo "<br/>";
 
 $hdw = new Course("后盾网","www.houdunwnag.com");
 $hdw->web();
 */
 
/*
 * 对象的释放
 * 1、我们的脚本执行完成后，释放对象
 * 2、删除对象的引用，释放对象
 * */
 
class TV{
	public $color;
	public $brand;
	function __construct(){
//		$this->look();
	}
	function look(){
		echo "看电视……";
	}
	function __destruct(){
		echo "释放对象";
	}
}
 
$d1 = new TV();
$d2 = $d1;
unset($d1);
unset($d2);
echo "<br/>===========================================================<br/>";


/*
 * 面向对象编程特性：抽象、封装、继承、多态
 * 	抽象：把一类对的共同属性和方法抽象出来，形成类，这种思考方式就是抽象
 * 	封装：把成员方法和成员属性封装到类中，隐藏属性和方法，隐藏方法实现的细节，通过public protected private final static 限定类成员的访问权限，数据被保护在内部，
 * 		   只有通过被授权的成员方法才可以操作。尽可能的对成员进行封装
 * 	继承：可以使一个类继承并拥有另一个已经存在类的成员属性和方法，被继承的类称为父类或基类，继承类为子类。extends 关键字 实现并继承关系
 * 	多态：子类继承父类，通过对父类的方法重写实现多态
 * */

class Arc{
	function del($id){
		echo "删除文章{$id}";
	}
	function edit($id){
		echo "编辑文章{$id}";
	}
}
class ArcInfo extends Arc{
	
}
class ArcNews extends Arc{
	function del($id){
		echo "<br/>";
		echo "删除主表文章{$id}";
		echo "<br/>";
		echo "删除附表文章{$id}";
	}
}
class ArcPic extends Arc{
	function del($id){
		echo "<br/>";
		echo "从主表删除图集{$id}<br/>";
		echo "从图片地址表{$id}<br/>";
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