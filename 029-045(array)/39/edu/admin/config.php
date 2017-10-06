<?php
$config = include "../db_config.php";

$admin = array(
	"APP_NAME"=>"后盾网后台管理系统",
	"AUTH_NO"=>"1"
);

return array_merge($config,$admin);

?>