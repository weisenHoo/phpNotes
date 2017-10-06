<?php
/*
 * __isset 
 * __unset 
 * __sleep 
 * __wakeup
 * 
 * */

/*
class hdw{
	private $name;
	private $age;
	private $money;
	
	function __construct($name,$age='',$money){
		$this->name = $name;
		$this->age = $age;
		$this->money = $money;
	}
	
	function __isset($var){
		$arr = array("name","age");
		if(in_array($var,$arr)){
			echo $var."属性存在，它的值是：".$this->$var;
		}elseif(in_array($var,array_keys(get_object_vars($this)))){
			echo "属性不允许外部检查";
		}else{
			echo "属性不存在";
		}
	}
	function __unset($c){
		if($c == "age"){
			unset($this->age);
			echo "删除属性{$c}成功";
		}else{
			echo "不允许删除属性{$c}";
		}
	}
}
$lisi = new hdw("李四",22,5500);
//isset($lisi->name);
unset($lisi->money);
//echo isset($_GET['page'])?$_GET['page']:1;
*/

/*
session_start();
$arr1 = array("后盾网","bbs.houdunwnag.com","mysql","php","jQuery","div+css","smarty");
$_SESSION['arr1'] = serialize($arr1);
*/

class db{
	private $host;
	private $user;
	private $pwd;
	private $dbname;
	private $mysqli;
	
	function __construct($host,$user,$pwd,$dbname){
		$this->host = $host;
		$this->user = $user;
		$this->pwd = $pwd;
		$this->dbname = $dbname;
		$this->db();
	}
	
	private function db(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->pwd,$this->dbname);
	}
	function select(){
		$sql = "SELECT id,cname FROM hdw_channel";
		$result = $this->mysqli
			->query($sql);
		$rows = array();
		while($row = $result->fetch_assoc()){
			$rows[] = $row;
		}
		echo "<pre>";
		print_r($rows);
	}
	function __wakeup(){
		$this->db();
	}
}

session_start();
$channl = new db("localhost","root","","test");
//$channl->select();
$_SESSION['channel_obj'] = serialize($channl);

class ren{
	private $name;
	private $age;
	
	function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
	}
	function show(){
		echo "姓名是：{$name}&nbsp;&nbsp;年龄是：{$age}";
	}
	function __sleep(){
		return array_keys(get_object_vars($this));
//		print_r(get_object_vars($this));
	}
}

$zao = new ren("赵六",22);
echo serialize($zao);





















/*
$arr = array(
	array(1,2,3,4,5,6,7,8),
	array(9,10,11,12,13,14,15,16),
	array(17,18,19,20,21,22,23,24),
	array(25,26,27,28,29,30,31,32),
	array(33,34,35,36,37,38,39,40),
	array(41,42,43,44,45,46,47,48)
);

$num = isset($_GET["page"])?$_GET["page"]:1;
for($i=0;$i<count($arr);$i++){
	if($num == ($i+1)){
		foreach($arr[$i] as $k=>$v){
			echo $k."=>".$v."<br>";
		}
	}
}

?>
<ul>
	<?php
	for($i=0;$i<count($arr);$i++){
		?>
		<li style="list-style: none;float: left;width: 30px;height: 30px;text-align: center;">
			<a href="?page=<?php echo $i+1; ?>"><?php echo $i+1; ?></a>
			</li>
		<?php
	}	
	?>
</ul>
<?php
*/









































?>