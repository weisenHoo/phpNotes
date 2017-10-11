<?php
/*
 * SESSION的持久化处理
 * 
 * */

ob_start();

session_set_cookie_params(20);
var_dump(session_get_cookie_params());

session_start();

$_SESSION['webname'] = "后盾网论坛";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";























?>