<?php
/*
 * ������ʽ_ԭ�ӱ�
 * 
 * */

$str = "�������̳ ��ַ��http://bbs.houdunwang.com 2017-6-16";

echo preg_match("/\.com[^\d]/is", $str ,$arr)?'yes':'no';
var_dump($arr);

























?>