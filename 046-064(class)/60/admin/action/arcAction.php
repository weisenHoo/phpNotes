<?php
/*
 * 文章处理类
 * */
 
class arcAction extends Action{
	function __construct(){
		echo "文章处理类<br/>";
	}
	
	function edit(){
		echo "编辑文章<br/>";
	}
	function del(){
		$db = new db();		
		if($db->del(1)){
			$this->message("删除成功");
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