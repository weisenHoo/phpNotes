<?php
/*
 * ���´�����
 * */
 
class arcAction extends Action{
	function __construct(){
		echo "���´�����<br/>";
	}
	
	function edit(){
		echo "�༭����<br/>";
	}
	function del(){
		$db = new db();		
		if($db->del(1)){
			$this->message("ɾ���ɹ�");
		}
		$image = new image();
	}
	function show(){
		$page = new page();
		$page->style(1);
	}
}

//$c = new arcAction();
//$c->del();
?>