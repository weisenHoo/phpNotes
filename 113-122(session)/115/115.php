<?php
/*
 * 删除SESSION方式
 * 
 * session_start 启动新会话或者重用现有会话
 * session_destroy 销毁一个会话中的全部数据
 * session_unset 释放所有的会话变量
 * session_name 读取/设置会话名称
 * session_id 获取/设置当前会话 ID
 * 
 * */

session_start();
$_SESSION['web'] = "后盾网";
$_SESSION['url'] = "www.houdunwang.com";

//$_SESSION = array();
session_unset();//内存当中的SESSION变量全部删除
session_destroy();//把文件删除，把SESSION_ID删除
setcookie(session_name(),'',1,'/');//删除COOKIE

echo $_SESSION['web'];




































?>