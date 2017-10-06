<?php
/*
 * public 共有的：本类,子类，外部对象都可以调用
 * protected 受保护的：本类子类，可以执行，外部对象不可以调用
 * private 私有的：只能本类执行，子类与外部对象都不可调用
 * 
 * */

 /*
class TV{
	private $shenyin;
	
	function __construct(){
		$this->shenyin=20;
	}
	public function yaokongqi($anniu,$liang=''){
		switch($anniu){
			case "shenyin":
				$this->shenyin($liang);
				break;
			case "guandianshi":
				$this->guandianshi();
				break;
			case "huantai":
				$this->huantai($liang);
				break;
			case "jingyin":
				$this->jingyin($liang);
				break;
		}
	}
	private function shenyin($daxiao){
		$this->shenyin = ($daxiao>0)?$this->shenyin+$daxiao:$this->shenyin-$daxiao;
		echo "现在声音是：".$this->shenyin;
	}
	private function guandianshi(){
		echo "关电视";
	}
	private function huantai($pindao){
		echo "现在第{$pindao}频道";
	}
	private function jingyin($zhuantai){
		$jingyin = ($zhuantai==1)?"电视爆音了":"打开声音";
		echo $jingyin;
	}
	public function houdeshengyin(){
		return $this->shenyin;
	}
	
}

$tv1 = new TV();
$tv1->yaokongqi("shenyin",6);
echo "<br/>";
echo "现在声音是".$tv1->houdeshengyin();
*/

/*
class db{
	private $mysqli;//数据库连接
	private $options;//SQL选项
	private $tableName;//表名
	function __comstrict($tabName){
		$this->tableName = $tabName;
		$this->db();
	}
	private function db(){
		$this->mysqli = new mysqli('localhost','root','','hdcms');
	}
	function fields($fildsArr){
		if(empty($fildsArr)){
			$this->options['fields']='';
		}elseif(is_array($fildsArr)){
			$this->options['fields']=implode(',',$fildsArr);
		}else{
			$this->options['fields']=$fildsArr;
		}		
		return $this;
	}
	function order($str){
		$this->options['fields'] = "ORDER BY ".$str;
		return $this;
	}
	function select(){
		$sql = "SELECT {$this->options[fields]} FROM {$this->tableName} ORDER BY {$this->options['order']}";
		return $this->query($sql);
	}
	private function query($sql){
		$result = $this->mysqli->query($sql);
		$rows = array();
		while($row = $result->fetch_assoc()){
			$rows[] = $row;
		}
		return $rows;
	}
	private function close(){
		$this->mysqli->close();
	}
	function __destruct(){
		$this->close();
	}
}

$chanel = new db("hd_channel");
$chanelInfo = $chanel->fields('id,cname,cpath')->select();
echo "<pre>";
print_r($chanelInfo);
*/

class a{
//	public function aa(){
//		echo 222;
//	}

	private function aa(){
		echo 222;
	}

//	protected function aa(){
//		echo 222;
//	}
}
class b extends a{
	function bb(){
		$this->aa();
	}
}
$c = new b();
$c->bb();




















































?>