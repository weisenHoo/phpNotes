<?php
/*
 * SESSION�ĳ־û�����
 * 
 * */

ob_start();

session_set_cookie_params(20);
var_dump(session_get_cookie_params());

session_start();

$_SESSION['webname'] = "�������̳";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";























?>