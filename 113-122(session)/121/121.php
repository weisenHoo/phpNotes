<?php
/*
 * 详解mysql操作sessions机制
 * 
 * spl_autoload_register 注册给定的函数作为 __autoload 的实现
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
	//数据操作句柄
	static $db;
	//SESSION表
	static $table;
	//SESSION过期时间
	static $max_time;
	//客户端身份信息
	static $card;
	//SESSION初始化
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
			//开启缓冲区
			ob_start();
			//连接数据库
			self::$db = new mysqli('localhost','root','','edu');
			!mysqli_connect_errno() or die("数据库了解错误");
			self::$db->query("SET NAMES GBK");
			//SESSION表
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


//$_SESSION['webname'] = "后盾网视频教程";
//$_SESSION['weburl'] = "http://bbs.houdunwang.com";
//$_SESSION['php'] = "后盾网php教程";

$_SESSION['login'] = 1;
$_SESSION['weburl'] = "http://www.7senven.com";

//session_destroy();




























?>