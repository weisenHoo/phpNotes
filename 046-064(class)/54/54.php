<?php
/*
 * ���� ���췽��
 * __construct��������
 * __destructʹ�÷��� 
 * PHP��д������
 * 
 * */

 /*
class Channel extends App{
	function __construct(){
		parent::__construct();
		$access = $_GET['access'];//�����û�Ȩ��
		if($access=='admin'){
			$method = $_GET['a'];
			$this->$method();
		}else{
			$this->display("��û��Ȩ�ޣ����ܲ�����Ŀ");
		}
	}
	function _edit(){
		echo "�༭��Ŀ";
	}
	function _del(){
		echo "ɾ����Ŀ";
	}
	function _display(){
		echo "��ʾ��Ŀ";
	}
}
$channel = new Channel();
*/

/*
class Db{
	private $host;//���ݿ������
	private $user;//���ݿ���û�
	private $pwd;//���ݿ������
	private $dbname;//���ݿ���
	private $mysqli;//���ݿ�����ָ��
	
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
		echo "��������";
	}
	public function update(){
		echo "��������";
	}
	public function _close(){
		echo "�ر����ݿ�";
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
		echo "<br/>���û���......<br/>";
	}
	static function _include(){
		echo "<br/>�����ļ�......<br/>";
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