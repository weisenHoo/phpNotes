<?php
/*
 * 画线&定义线样式&宽度&风格&笔刷
 * 
 *  imageline 画一条线段
 *  imagedashedline 画一条虚线
 *  imagesetstyle 设定画线的风格
 *  imagesetthickness 设定画线的宽度
 * 
 * */

/*
$img = imagecreatetruecolor(600, 600);
$color1 = imagecolorallocate($img, 24, 177, 121);
imagefill($img, 0, 0, $color1);

$white = imagecolorallocate($img, 255, 255, 255);
//imageline($img, mt_rand(0, 600), mt_rand(0, 600), mt_rand(0, 600), mt_rand(0, 600), $white);

for($i=0;$i<=10000;$i++){
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imageline($img, mt_rand(0, 600), mt_rand(0, 600), mt_rand(0, 600), mt_rand(0, 600), $color);	
}

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$img = imagecreatetruecolor(300, 600);
$red = imagecolorallocate($img, 255, 0, 0);

imagedashedline($img, 150, 20, 150, 580, $red);

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$img = imagecreatetruecolor(800, 300);
$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$white = imagecolorallocate($img, 255, 255, 255);

$style = array($red,$blue,$white);
imagesetstyle($img, $style);
imagesetthickness($img, 35);
//imageline($img, 0, 0, 800, 300, IMG_COLOR_STYLED);
imageline($img, 0, 0, 800, 300, $white);

header("content-type:image/jpeg");
imagejpeg($img);
*/

$img = imagecreatetruecolor(600, 600);
$pix = imagecreatetruecolor(20, 20);

$jpeg = imagecreatefromjpeg("index.jpg");

$yellow = imagecolorallocate($pix, 255, 255, 0);
imagefill($pix, 0, 0, $yellow);

imagesetbrush($img, $jpeg);

imageline($img, 0, 0, 300, 300, IMG_COLOR_BRUSHED);

header("content-type:image/jpeg");
imagejpeg($img);





































?>