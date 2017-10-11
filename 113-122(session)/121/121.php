<?php
/*
 * ���mysql����sessions����
 * 
 * spl_autoload_register ע������ĺ�����Ϊ __autoload ��ʵ��
 * 
 * */

/*
class APP{
	static function run(){
		spl_autoload_register(array("APP","autoload"));
	}
	static function autoload($classname){
		require_once $classname.".class.php";
	}
}

APP::run();
$hdw = new houdunwang();
echo $hdw->ad();

$php121 = new php121();
$php121->msg();
*/


class session{
	//���ݲ������
	static $db;
	//SESSION��
	static $table;
	//SESSION����ʱ��
	static $max_time;
	//�ͻ��������Ϣ
	static $card;
	//SESSION��ʼ��
	static function run(){
		if(ini_get("session.save_handler") == "user" || ini_set("session.save_handler", "user")){
			session_set_save_handler(
				array(__CLASS__,"start"),
				array(__CLASS__,"close"),
				array(__CLASS__,"read"),
				array(__CLASS__,"write"),
				array(__CLASS__,"destory"),
				array(__CLASS__,"gc")
			);
			//����������
			ob_start();
			//�������ݿ�
			self::$db = new mysqli('localhost','root','','edu');
			!mysqli_connect_errno() or die("���ݿ��˽����");
			self::$db->query("SET NAMES GBK");
			//SESSION��
			self::$table = "session";
			self::$max_time = 1;
			self::$card = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
			session_start();
		}
	}
	static function start($path,$session_name){
		echo "<br/>start<br/>";
		return TRUE;
	}
	static function close(){
		self::gc(self::$max_time);
		self::$db->close();
		echo "<br/>close<br/>";
		return TRUE;
	}
	static function read($sid){
		$sql = "SELECT `data` FROM ".self::$table." WHERE `sid` ='{$sid}' AND `card` ='".self::$card."'";
		$result = self::$db->query($sql);
		$row = $result->fetch_assoc();
		echo "<br/>read<br/>";
		return self::$db->affected_rows>0?$row['data']:'';
	}
	static function write($sid,$data){
		$sql = "SELECT `sid` FROM ".self::$table." WHERE `sid` ='{$sid}' AND `card` ='".self::$card."'";
		$result = self::$db->query($sql);
		$mtime = time();
		if(self::$db->affected_rows>0){
			$sql = "UPDATE ".self::$table." SET `data` ={$data} `mtime` ={$mtime} WHERE `sid` ={$sid}";
		}else{
			$sql = "INSERT INTO ".self::$table." (`sid`,`data`,`mtime`,`ip`,`card`) VALUES('{$sid}','{$data}','".time()."','{$_SERVER['REMOTE_ADDR']}','".self::$card."')";
		}
		echo "<br/>write<br/>";
		return self::$db->query($sql)?TRUE:FALSE;
	}
	static function destory($sid){
		$sql = "DELETE FROM ".self::$table." WHERE `sid`='{$sid}'";
		self::$db->query($sql);
		echo "<br/>destory<br/>";
		return TRUE;
	}
	static function gc($max_time){
		$max_time = self::$max_time;
		$sql = "DELETE FROM ".self::$table." WHERE `mtime`<'".(time()-$max_time)."'";
		self::$db->query($sql);
		
		echo "<br/>gc<br/>";
	}
}

session::run();


//$_SESSION['webname'] = "�������Ƶ�̳�";
//$_SESSION['weburl'] = "http://bbs.houdunwang.com";
//$_SESSION['php'] = "�����php�̳�";

$_SESSION['login'] = 1;
$_SESSION['weburl'] = "http://www.7senven.com";

//session_destroy();




























?>