<?php
/*
 * ������ʽ_����ʹ��
 * 
 * preg_replace
 * 
 * */


//$str = "���ڰٶ�����http://www.baidu.com.cn,����Ѷ����http://www.soso.com�����������̳http://bbs.houdunwang.com��PHP�����Ƶ�̳�";
//$pregArr = array(
//	"/(http:\/\/)?[a-z]{0,10}\.(?!houdunwang)\w+?\.[a-z]{2,4}(.[a-z]{2})*/is",
//	"/(http:\/\/)(bbs|www)?(\.houdunwang\.com)/is"
//);
//$replaceArr = array(
//	"",
//	"<a href='\\0' style='font-weight: bold;color: #f00;'>\\0</a>"
//);
//$newstring = preg_replace($pregArr, $replaceArr, $str);
//echo $newstring;

/*
$str = "��ӭ���������ѧϰPHP����http://bbs.houdunwang.com����Ѹ����������¼�������̳";
$preg = "/���/is";
$replace = "<a target='_blank' href='http://www.huodunwang.com'>\${0}2011��Դ������ѷ�����Ƶ�̳�</a>";
$newStr = preg_replace($preg, $replace, $str);
echo $newStr;
*/


/*
$str = "�������̳http://bbs.houdunwang.com,�����http://www.houdunwang.com";
$preg = "/(http:\/\/)?(bbs|www)?\.houdunwang.com/ise";
$replace = "\"<a target='_blank' href='\\0'>\".strtoupper('\\0').\"</a>\"";
$newStr = preg_replace($preg, $replace, $str);
echo $newStr;
*/


$str = "houdunwang.com";
$preg = "/u/is";
$replace = "#";
$newStr = preg_replace($preg, $replace, $str, -1, $count);
echo $newStr."<br/>";
echo "���滻{$count}��";















?>