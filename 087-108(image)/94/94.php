<?php
/*
 * 画圆 弧线 网站饼状统计图绘制
 * 
 * imageellipse 画一个椭圆
 * imagefilledellipse 画一椭圆并填充
 * 
 * imagearc 画椭圆弧
 * imagefilledarc  画一椭圆弧且填充
 * 
 * */

/*
$img = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($img, 255, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

imageellipse($img, 250, 250, 200, 200, $red);
imagefilledellipse($img, 250, 250, 100, 100, $red);

header("content-type:image.jpeg");
imagejpeg($img);
*/


$img = imagecreatetruecolor(600, 600);
$white = imagecolorallocate($img, 255, 255, 255);
//$blue = imagecolorallocate($img, 0, 0, 255);
imagefill($img, 0, 0, $white);

//imagearc($img, 300, 300, 400, 400, 0, 90, $blue);
//imagefilledarc($img, 300, 300, 300, 300, 0, 135, $blue, IMG_ARC_PIE);
//imagefilledarc($img, 20, 20, 300, 300, 0, 90, $blue, IMG_ARC_CHORD);
//imagefilledarc($img, 190, 20, 300, 300, 0, 90, $blue, IMG_ARC_NOFILL);
//imagefilledarc($img, 20, 190, 300, 300, 0, 90, $blue, IMG_ARC_EDGED);

for($i=0;$i<20;$i++){
	$red = imagecolorallocate($img, 255-$i*5, 0, 0);
	$green = imagecolorallocate($img, 0, 255-$i*5, 0);
	$blue = imagecolorallocate($img, 0, 0, 255-$i*5);
	
	imagefilledarc($img, 300, 300-$i, 400, 60, 220, 0, $red, IMG_ARC_PIE);
	imagefilledarc($img, 300, 300-$i, 400, 60, 0, 120, $green, IMG_ARC_PIE);
	imagefilledarc($img, 300, 300-$i, 400, 60, 120, 220, $blue, IMG_ARC_PIE);
}

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);






































?>