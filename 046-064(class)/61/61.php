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
		echo "�ҵ������ǣ�".$this->name."&nbsp;&nbsp;�ҵ������ǣ�".$this->age."<br/>";
	}
	function __set($k,$v){		
		if(trim($_SESSION['utype'])=='admin'){
			$this->$k=$v;
		}else{
			die('��ûȨ�޲���');
		}
	}
	function __get($varname){
		if(trim($_SESSION['utype'])=='admin'){
			return $this->$varname;
		}else{
			return "����";
		}
	}
}


//$lisi = new study();
//$lisi->age = 55;
//$lisi->say();


$wangwu = new study('����','22','��','����');
?>
<table border="" cellspacing="" cellpadding="">
	<tr><th>����</th><th>����</th><th>�Ա�</th><th>����</th></tr>
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
				die("Ȩ�����ô�������û�д˷���");
			}
		}
		$publicAccess = array('say','eat');
		return array_merge($publicAccess,$access);
	}
	public function chuck(){
		$action = isset($_GET['a'])?$_GET['a']:'index';
		if(!in_array($action,$this->access)) die("��û��Ȩ�޲���");
		$this->$action();
	}
	
	function say(){
		echo "������{$this->name}�����䣺{$this->age}���Ա�{$this->sex}���γ̣�{$this->classType}<br/>";
	}
	function eat(){
		echo "{$this->name}�ڳԷ�";
	}
	function open(){
		echo "{$this->name}����";
		
	}
	function money(){
		echo "{$this->name}�鿴������˻�";
	}
}
//print_r(get_class_methods('teacher'));

$libo = new teacher("�",32,"��","jquery",array('money'));
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