<?php
/*
 * ������ʽ_ģʽ��������1��
 * 
 * i �����ִ�Сдģʽ��ƥ��
 * m ����ƥ������
 * ģʽ���������Խ��ʹ��
 * s ���ַ�����Ϊ���У�ʹ.����ƥ�䵽���з�
 * 
 * */

/*
$str = "www.houdunwang.com";
$preg = "/houdunWang/i";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<a href='http://www.baidu.com'>baidu.com</a>\n<a href='http://www.sina.com'>sina.com</a>";
echo $str;

$preg = "/^<a.*a>$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<div id='d1'>���ǵ�1��div</div>\n<DIV id='d2'>���ǵ�2��DIV</DIV>";
echo $str;

$preg = "/^<div .*>(.*?)<\/div>$/im";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "<div style='border: 1px solid #dcdcdc;width: 500px;height: 500px;'><p>���ǵ�һ��</p>\n<p>���ǵڶ���</p></div>";
echo $str;

$preg = "/<div .*>(.*)<\/div>/s";
preg_match_all($preg, $str, $arr);
var_dump($arr);





























?>