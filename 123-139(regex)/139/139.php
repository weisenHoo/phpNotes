<?php
/*
 * ������ʽ_����ʹ��
 * 
 * preg_replace_callback 
 * preg_filter.camrec
 * 
 * */

/*
$str = "houdunwang.com";
echo $str."<br/>";

$preg = "/(h)(o)(u)/is";
function replaceFunc($args){
	return "<span style='color: #f00;font-weight: bold;'>".strtoupper($args[0])."</span>";
}
$newStr = preg_replace_callback($preg, "replaceFunc", $str);
echo $newStr;
*/

/*
$str = "houdunwang.com";
echo $str."<br/>";

$preg = array("/hou/is");
$newStr = preg_replace_callback($preg, create_function("\$args", "return \"<span style='color: #f00;font-weight: bold;'>\".strtoupper(\$args[0]).\"</span>\";"), $str);
echo $newStr;
*/

/*
$str = "<div style='background-color: #365872;width: 500px;height: 200px;font-size: 12px;line-height:1.8em;margin: 20px auto;padding: 10px;color: #fff;'>
			��������������������Ƶ�̳̽��е��ף��ø�����ͨ���������http://www.houdunwang.com ��������Ƶ�̳̹���ƽ̨���棬��ΪIT������Ա�е�һԱ
		</div>";
echo $str."<br/>";

$preg = array(
	"/�����/is",
	"/(http:\/\/)?(www|bbs)?\.houdunwang\.com/is"
);

class replaceFunc{
	static function func($args){
		if(strstr($args[0], "���")){
			return $args[0]."<strong style='color: yellow;'>(2011��ܿ�Դ��ܣ����CMSϵͳ����������)</strong>";
		}
		return "<a href='http://www.houdunwang.com' target='_blank' style='background-color: yellow;color: #f00;'>".$args[0]."</a>";
	}
}

$newStr = preg_replace_callback($preg, "replaceFunc::func", $str);
echo $newStr;
*/

/*
$str = "�������̳http://bbs.houdunwang.com�����http://www.houdunwang./com";
echo $str."<br/>";

$preg = "/(http:\/\/)?(www|bbs)?\.(houdunwang)\.(com)/is";

$newStr = preg_replace_callback($preg, create_function("\$args", "return ucwords(\"\$args[2]\").'.'.ucwords(\"\$args[3]\").'.'.ucwords(\"\$args[4]\");"), $str);
echo $newStr;
*/

/*
$str = "houdunwang.com";
$preg = "/u/is";
$newStr = preg_replace_callback($preg, create_function("\$args", "return '#';"), $str, -1, $count);
echo $newStr."<br/>";
echo "�����{$count}���滻";
*/

/*
$str = "�������̳http://bbs.houdunwang.com";
echo $str."<br/>";

$preg = "/houdunwang.com/is";

//$newStr = preg_replace($preg, "<strong>\\0</strong>", $str);
$newStr = preg_filter($preg, "<strong>\\0</strong>", $str);
echo $newStr;
*/


$arr = array("1.jpg","2.txt","3.doc","4.exe","5.php","6.jpg");
var_dump($arr);

$newArr = preg_replace("/jpg|txt/is", "", $arr);
//$newArr = preg_filter("/.*\.(jpg|txt)/is", "\\0", $arr);

$newArr = preg_filter("/jpg|txt/is", "", $arr);
var_dump($newArr);









?>