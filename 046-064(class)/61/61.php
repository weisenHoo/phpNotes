<?php
/*
 * __set 
 * __get 
 * get_class_methods 
 * get_class_vars
 * 
 * */

 /*
session_start();
$_SESSION['utype'] = isset($_GET['type'])?$_GET['type']:FALSE; 
 
class study{
	public $name;
	private $age;
	public $sex;
	public $city;
	
	function __construct($name,$age,$sex,$city){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
		$this->city = $city;
	}
	function say(){
		echo "我的名字是：".$this->name."&nbsp;&nbsp;我的年龄是：".$this->age."<br/>";
	}
	function __set($k,$v){		
		if(trim($_SESSION['utype'])=='admin'){
			$this->$k=$v;
		}else{
			die('你没权限操作');
		}
	}
	function __get($varname){
		if(trim($_SESSION['utype'])=='admin'){
			return $this->$varname;
		}else{
			return "保密";
		}
	}
}


//$lisi = new study();
//$lisi->age = 55;
//$lisi->say();


$wangwu = new study('王五','22','男','北京');
?>
<table border="" cellspacing="" cellpadding="">
	<tr><th>名称</th><th>年龄</th><th>性别</th><th>城市</th></tr>
	<tr>
		<?php
		echo "<td>{$wangwu->name}</td>";
		echo "<td>{$wangwu->age}</td>";
		echo "<td>{$wangwu->sex}</td>";
		echo "<td>{$wangwu->city}</td>";
		?>
	</tr>
</table>
<?php
*/

/*
class teacher{
	private $name;
	private $age;
	private $sex;
	private $classType;
	private $access;
	
	function __construct($name,$age,$sex,$classType,$access){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
		$this->classType = $classType;
		$this->access = $this->access($access);
	}
	
	private function access($access){
		if(!is_array($access)) return FALSE;
		$methodArr = get_class_methods(__CLASS__);
		foreach($access as $v){
			if(!in_array($v,$methodArr)){
				die("权限配置错误，类中没有此方法");
			}
		}
		$publicAccess = array('say','eat');
		return array_merge($publicAccess,$access);
	}
	public function chuck(){
		$action = isset($_GET['a'])?$_GET['a']:'index';
		if(!in_array($action,$this->access)) die("你没有权限操作");
		$this->$action();
	}
	
	function say(){
		echo "姓名：{$this->name}，年龄：{$this->age}，性别：{$this->sex}，课程：{$this->classType}<br/>";
	}
	function eat(){
		echo "{$this->name}在吃饭";
	}
	function open(){
		echo "{$this->name}开门";
		
	}
	function money(){
		echo "{$this->name}查看后盾网账户";
	}
}
//print_r(get_class_methods('teacher'));

$libo = new teacher("李波",32,"男","jquery",array('money'));
$libo->chuck();
*/

class a{
	private $a1;
	private $a2;
	private $a3;
	public $a4;
	public $a5;
	public $a6;
	
	public static function get_vars(){
		return get_class_vars(__CLASS__);
	}
}

//$vars = new a();
//print_r($vars->get_vars());
print_r(a::get_vars());
























?>