<?php
/*
 * »æÖÆÏñËØ¼°¾ØÐÎÍ¼
 * 
 * */

/*
$img = imagecreatetruecolor(80, 30);
$jpeg = imagecreatefromjpeg("index.jpg");
$w = imagesx($img);
$h = imagesy($img);
$jpeg_w = imagesx($jpeg);
$jpeg_h = imagesy($jpeg);
//imagecopy($img, $jpeg, 0, 0, mt_rand(0, $jpeg_w), mt_rand(0, $jpeg_h), $w, $h);
$red = imagecolorallocate($img, 255, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$color_line = imagecolorallocate($img, 180, 180, 180);
imageline($img, 0, 0, $w-1, 0, $color_line);
imageline($img, $w-1, 0, $w-1, $h-1, $color_line);
imageline($img, $w-1, $h-1, 0, $h-1, $color_line);
imageline($img, 0, $h-1, 0, 0, $color_line);

//imagesetpixel($img, 150, 150, $red);
for($i=0;$i<30;$i++){
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	$color_apa = imagecolorallocatealpha($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), mt_rand(50, 110));
	for($j=0;$j<10;$j++){
		imagesetpixel($img, mt_rand(0, $w), mt_rand(0, $h), $color);
	}	
	imageline($img, mt_rand(0, $w), mt_rand(0, $h), mt_rand(0, $w), mt_rand(0, $h), $color_apa);
}

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$rec_img = imagecreatetruecolor(500, 500);
$white = imagecolorallocate($rec_img, 255, 255, 0);
$black = imagecolorallocate($rec_img, 188, 188, 188);
$w = imagesx($rec_img);
$h = imagesy($rec_img);
imagefill($rec_img, 0, 0, $white);

//imagerectangle($rec_img, 0, 0, $w-1, $h-1, $black);
for($i=0;$i<50;$i++){
	$color = imagecolorallocatealpha($rec_img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), mt_rand(50, 110));
	imagerectangle($rec_img, mt_rand(0, $w), mt_rand(0, $h), mt_rand(0, $w), mt_rand(0, $h), $color);
}

header("content-type:image/jpeg");
imagejpeg($rec_img);
*/

$fileName = 'index.jpg';
$img = imagecreatefromjpeg($fileName);
$imgInfo = getimagesize($fileName);
$w = imagesx($img);
$h = imagesy($img);
$blue = imagecolorallocate($img, 0, 0, 200);

//imagefilledrectangle($img, 0, 0, 100, 100, $blue);
for($i=0;$i<20;$i++){
	$color = imagecolorallocatealpha($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), mt_rand(50, 110));
	imagefilledrectangle($img, mt_rand(0, $w), mt_rand(0, $h), mt_rand(0, $w), mt_rand(0, $h), $color);
}

header("content-type:image/jpeg");
imagejpeg($img);





































?>