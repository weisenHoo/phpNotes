<?php
/*
 * 图像拷贝缩略图原理
 * imagecopymergegray 用灰度拷贝并合并图像的一部分
 * imagecopyresampled 重采样拷贝部分图像并调整大小
 * 
 * */

/*
$img = imagecreatetruecolor(500, 500);

$filename = "index.jpg";
!file_exists($filename)?die("文件不存在...无法进行操作"):'';
$jpg = imagecreatefromjpeg($filename);
$img = imagecreatefromjpeg($filename);

imagecopymergegray($img, $jpg, 0, 0, 0, 0, imagesx($jpg), imagesy($jpg), 0);

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($jpg);
*/

/*
$img = imagecreatetruecolor(300, 300);
$jpg = imagecreatefromjpeg('index.jpg');

imagecopyresampled($img, $jpg, 0, 0, 0, 0, 300, 300, imagesx($jpg), imagesy($jpg));

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($jpg);
*/

/*
$img = imagecreatetruecolor(300, 300);
$jpg = imagecreatefromjpeg('index.jpg');

$jpg_w = imagesx($jpg);
$jpg_h = imagesy($jpg);

if($jpg_w>$jpg_h){
	imagecopyresampled($img, $jpg, 0, 0, 0, 0, $jpg_w/$jpg_h*300, 300, imagesx($jpg), imagesy($jpg));
}else{
	imagecopyresampled($img, $jpg, 0, 0, 0, 0, 300, $jpg_h/$jpg_w*300, imagesx($jpg), imagesy($jpg));
}

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($jpg);
*/

function resize($filename,$out_filename,$w=200,$h=200){
	$jpg = imagecreatefromjpeg($filename);
	$s_w = imagesx($jpg);
	$s_h = imagesy($jpg);
	if($s_h>$s_w){
		$n_h = ceil(($w/$s_w)*$s_h);
		$n_w = $w;
	}else{
		$n_h = $h;
		$n_w = ceil(($h/$s_h)*$s_w);				
	}
	$img = imagecreatetruecolor($w, $h);
	imagecopyresampled($img, $jpg, 0, 0, 0, 0, $n_w, $n_h, $s_w, $s_h);
	imagejpeg($img,$out_filename);
	imagedestroy($img);
	imagedestroy($jpg);
}

resize("index.jpg","g_index.jpg");


































?>