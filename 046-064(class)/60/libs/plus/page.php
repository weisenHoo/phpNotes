<?php
/*
 * 分页类
 * */
 
 class page{
 	function __construct(){
 		echo "page分页类<br/>";
 	}
	function style($style){
		echo "这是第{$style}号分页风格<br/>";
	}
 }
?>