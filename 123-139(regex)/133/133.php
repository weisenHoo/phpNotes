<?php
/*
 * ������ʽ_����ƥ��
 * 
 * */

/*
$str = "www.houdunwang.com";
$preg = "/(?<=www\.).*(?=\.com)/is";
preg_match($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "php python pear";
//$preg = "/\b\w+\b/is";
$preg = "/\bp(?!h)\w+\b/is";//��ȡp���治��h���ַ�
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "@houdunwang.com@taobao.com@sina.com@sohu.com#yahoo.com#";
$preg = "/(?<=[@,#]).*?(?=[@,#])/is";
preg_match_all($preg, $str, $arr);
var_dump($arr);


































?>