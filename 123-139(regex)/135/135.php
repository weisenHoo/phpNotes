<?php
/*
 * ������ʽ_ģʽ��������2��
 * 
 * x ģʽ�еĿհ׺��Բ���
 * U ƥ��������ַ������ݣ���ֹ̰��ƥ��
 * A ǿ�ƴ��ַ�����ʼ����
 * D ����$���Ž�ƥ�䵽Ŀ���ַ����Ľ�β ����mģʽ��������ʧЧ
 * e ���滻�ַ�����Ϊ���ʽ��ʹ��
 * 
 * */

/*
$str = "http://www.houdunwang.com";
$preg = "/hou dunwang.com/x";
preg_match($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<div>�������www.houdunwang.com</div><div>�ٶȣ�www.baidu.com</div>";
$preg = "/<div>(.*)<\/div>/U";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "<h1>�������Ƶ�̳����������</h1>\n<h1>�ٶ���������</h1>";
$preg = "/^<h1>(.*)<\/h1>/AUim";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/*
$str = "houdunwang.com\n";
$preg = "/.com$/Dm";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/


$str = "<p>����<a href='http://www.baidu.com'>�ٶ���������</a></p>
		<h1><a href='http://www.ku6.com'>��6</a>��Ƶ��վ</h1>";
echo $str;

$preg = "/<a\s+href=(('|\").*\\2)>.*<\/a>/Uise";
preg_match_all($preg, $str, $arr);
var_dump($arr);

echo preg_replace($preg, "str_replace('\\1', '\"http://www.houdunwang.com\"', '\\0')", $str); 



























?>