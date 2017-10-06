<?php
 class db{
 	function __construct(){
 		echo "db__数据库处理类<br/>";
 	}
	function insert(){
		echo "插入数据库<br/>";
		return $this;
	}
	function select(){
		echo "查找方法<br/>";
		return $this;
	}
	function order(){
		echo "排序方法<br/>";
		return $this;
	}
	function del($id){
		echo "删除{$id}号在数据库的记录<br/>";
		return true;
	}
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /*
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
 }
  */
?>