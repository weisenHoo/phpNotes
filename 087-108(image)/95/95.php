<?php
/*
 * ���ƶ���м����ֻ���
 * 
 * imagepolygon ��һ�������
 * imagefilledpolygon ��һ����β����
 * 
 * imagechar ˮƽ�ػ�һ���ַ�
 * imagecharup ��ֱ�ػ�һ���ַ�
 * imagestring ˮƽ�ػ�һ���ַ���
 * imagestringup ��ֱ�ػ�һ���ַ���
 * 
 * */

/*
$img = imagecreatetruecolor(500, 500);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$color = imagecolorallocate($img, 188, 188, 188);
$points = array(10,10,490,10,490,490,10,490);
//imagepolygon($img, $points, 4, $color);
imagefilledpolygon($img, $points, 4, $color);

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$img = imagecreatetruecolor(500, 500);
$color = imagecolorallocate($img, 121, 32, 123);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$str = "http://bbs.houdunwang.com";
$str_len = strlen($str);

//for($i=0;$i<$str_len;$i++){
//	$char = substr($str, $i, 1);
//	imagechar($img, 5, 10+$i*10, 10, $char, $color);
//	imagecharup($img, 5, 10, 300-$i*10, $char, $color);
//}

imagestring($img, 5, 10, 10, "http://bbs.houdunwang.com", $color);

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*/

$img = imagecreatefromjpeg("index.jpg");

$black = imagecolorallocate($img, 0, 0, 0);
//imagestring($img, 5, 10, 10, "http://bbs.houdunwang.com", $black);
imagestringup($img, 5, 10, 300, "http://bbs.houdunwang.com", $black);

header("content-type:image/jpeg");
imagejpeg($img, null, 60);
imagedestroy($img);




























?>