<?php
/*
 * ɾ��SESSION��ʽ
 * 
 * session_start �����»Ự�����������лỰ
 * session_destroy ����һ���Ự�е�ȫ������
 * session_unset �ͷ����еĻỰ����
 * session_name ��ȡ/���ûỰ����
 * session_id ��ȡ/���õ�ǰ�Ự ID
 * 
 * */

session_start();
$_SESSION['web'] = "�����";
$_SESSION['url'] = "www.houdunwang.com";

//$_SESSION = array();
session_unset();//�ڴ浱�е�SESSION����ȫ��ɾ��
session_destroy();//���ļ�ɾ������SESSION_IDɾ��
setcookie(session_name(),'',1,'/');//ɾ��COOKIE

echo $_SESSION['web'];




































?>