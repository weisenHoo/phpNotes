<?php

class channelAction{
	//配置项
	protected $config;
	//增加栏目
	function __construct(){
		$this->config = $config = include "config.php";
//		echo "<pre>";
//		print_r($this->config);
	}
	public function channelAdd(){
		echo $this->config['APP_NAME'];
	}
	//修改栏目信息
	protected function channelEdit(){
		
	}
}

$c = new channelAction();
$c->channelAdd();

?>