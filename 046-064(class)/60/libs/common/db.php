<?php
 class db{
 	function __construct(){
 		echo "db__���ݿ⴦����<br/>";
 	}
	function insert(){
		echo "�������ݿ�<br/>";
		return $this;
	}
	function select(){
		echo "���ҷ���<br/>";
		return $this;
	}
	function order(){
		echo "���򷽷�<br/>";
		return $this;
	}
	function del($id){
		echo "ɾ��{$id}�������ݿ�ļ�¼<br/>";
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