<?php



/*
 * ������ʽ_ԭ����
 * 
 * preg_match_all ִ��һ��ȫ��������ʽƥ��
 * 
 *  PREG_PATTERN_ORDER
 * 	�������Ϊ$matches[0]��������ģʽ������ƥ��, $matches[1] �����һ�����������ƥ�䣬�Դ����ơ� 
 *  
 * 	PREG_SET_ORDER
 * 	�������Ϊ$matches[0]������һ��ƥ��õ�������ƥ��(��������)�� $matches[1]�ǰ����ڶ���ƥ�䵽������ƥ��(��������)�����飬�Դ����ơ� 
 * 
 * 
 * preg_replace ִ��һ��������ʽ���������滻
 * */


$houdunwang = <<<str
<html>
	<heard></heard>
	<body>
		<h1>�����PHP��Ƶ�̳�</h1>
		<h2>�����DREAMWEAVER CS5��Ƶ�̳�</h2>
		<h3>�����JAVACRIPT��Ƶ�̳�</h3>
		<h4>�����DIV+CSS��Ƶ�̳�</h4>
		<h5></h5>
		<h6></h6>
	</body>
</html>
str;

//echo $houdunwang;

//$preg = "/(<h1>|<h2>)(.*?)(<\/h1>|<\/h2>)/is";
//$preg = "/<(h1|h2)>(.*?)<\/(h1|h2)>/is";
$preg = "/<(h\d{1})>(.*?)<\/(\\1)>/is";
//$preg = '/<(h1|h2)>(.*?)<\/(\1)>/is';
//$preg = "/<(?'houdunwang'h1|h2)>(.*?)<\/(\k'houdunwang')>/is";

/*
preg_match_all($preg, $houdunwang, $arr, PREG_SET_ORDER);
var_dump($arr);
*/

/*
$str = preg_replace($preg, "<strong>\\2</strong>", $houdunwang);
echo $str;
*/

$str = preg_replace($preg, "<\\1>http://bbs.houdunwang.com<\\3>", $houdunwang);
echo $str;










?>