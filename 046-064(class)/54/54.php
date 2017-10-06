<?php
/*
 * 对象 构造方法
 * __construct析构方法
 * __destruct使用方法 
 * PHP重写与重载
 * 
 * */

 /*
class Channel extends App{
	function __construct(){
		parent::__construct();
		$access = $_GET['access'];//保存用户权限
		if($access=='admin'){
			$method = $_GET['a'];
			$this->$method();
		}else{
			$this->display("你没有权限，不能操作栏目");
		}
	}
	function _edit(){
		echo "编辑栏目";
	}
	function _del(){
		echo "删除栏目";
	}
	function _display(){
		echo "显示栏目";
	}
}
$channel = new Channel();
*/

/*
class Db{
	private $host;//数据库的主机
	private $user;//数据库的用户
	private $pwd;//数据库的密码
	private $dbname;//数据库名
	private $mysqli;//数据库连接指针
	
	function __construct(){
		include "dbConfig.php";
		$this->host = HOST;
		$this->user = USER;
		$this->pwd = PWD;
		$this->dbname = DBNAME;
		$this->_connect();
	}
	
	private function _connect(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->pwd,$this->dbname);
	}
	public function insert(){
		echo "插入数据";
	}
	public function update(){
		echo "更新数据";
	}
	public function _close(){
		echo "关闭数据库";
	}
	function __destruct(){
		$this->close();
	}
}
$chanel = new Db();
$arc = new Db();
*/

/*
$chanel->host = 'localhost';
$chanel->user = 'root';
$chanel->pwd = '';
$chanel->dbname = 'hdcms';
$chanel->connect();
*/

/*
class App{
	function __construct(){
		self::_include();
		self::_config();
	}
	static function _config(){
		echo "<br/>配置环境......<br/>";
	}
	static function _include(){
		echo "<br/>载入文件......<br/>";
	}
	function display($content){
		echo "<h1 style='color: #333;border: 1px solid #f00;'>{$content}</h1>";
	}
	public function dump($content){
		echo "<pre>";
		print_r($content);
	}
}
//$app = new App();
*/

































?> 