<?php
/*
 * public ���еģ�����,���࣬�ⲿ���󶼿��Ե���
 * protected �ܱ����ģ��������࣬����ִ�У��ⲿ���󲻿��Ե���
 * private ˽�еģ�ֻ�ܱ���ִ�У��������ⲿ���󶼲��ɵ���
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
		echo "���������ǣ�".$this->shenyin;
	}
	private function guandianshi(){
		echo "�ص���";
	}
	private function huantai($pindao){
		echo "���ڵ�{$pindao}Ƶ��";
	}
	private function jingyin($zhuantai){
		$jingyin = ($zhuantai==1)?"���ӱ�����":"������";
		echo $jingyin;
	}
	public function houdeshengyin(){
		return $this->shenyin;
	}
	
}

$tv1 = new TV();
$tv1->yaokongqi("shenyin",6);
echo "<br/>";
echo "����������".$tv1->houdeshengyin();
*/

/*
class db{
	private $mysqli;//���ݿ�����
	private $options;//SQLѡ��
	private $tableName;//����
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