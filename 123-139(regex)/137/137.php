<?php
/*
 * ������ʽ_����ʹ��
 * 
 * preg_grep 
 * preg_split
 * 
 * */

/*
$arr = array("javascript","jquery","php","python","jscript","vbscript");;
$arr2 = preg_grep("/script$/is", $arr, PREG_GREP_INVERT);
var_dump(array_values($arr2));
*/

/*
$str = "<div style='border: 1px solid #333;'><a href='http://www.houdunwang.com'>��ܹ���</a><br/>��¼�˽�����</div>
<div style='border: 5px solid #333;'><a href='http://bbs.houdunwang.com'>�����̳</a><br/>������ظ�����Ƶ�̳�</div>";
echo $str;


//$preg = "/<div.*>(.*)<\/div>/Uis";
//preg_match_all($preg, $str, $arr);
//var_dump($arr);


$arr = preg_split("/(?:<div\s+style=(['\"]).*?\\1>)|(<\/div>\s*)/is", $str, 0, PREG_SPLIT_NO_EMPTY);
var_dump($arr);
*/


$str = "upload/1.jpg#upload/2.jpg#upload/3.jpg#upload/4.jpg##upload/5.jpg";
$arr = preg_split("/#/is", $str, 0, PREG_SPLIT_NO_EMPTY+PREG_SPLIT_OFFSET_CAPTURE);
var_dump($arr);



































?>