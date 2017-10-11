<?php
/*
 * magecopymerge 拷贝并合并图像的一部分
 * imagecopy 拷贝图像的一部分
 * imagerotate 用给定角度旋转图像
 * 
 * */

/*
$jpeg = imagecreatefromjpeg("index.jpg");
$bgd_color = imagecolorallocate($jpeg, 255, 0, 0);
$img = imagerotate($gif, 30, $bgd_color);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*/

/*不成功
$gif = imagecreatefromgif("logo.gif");
$bg_color = imagecolorallocate($gif, 255, 0, 0);
$index = imagecolortransparent($gif);
if($index>=0){
	imagecolorset($gif, $index, 255, 255, 0);
}
$img = imagerotate($gif, 30, $bg_color);
header("content-type:image/gif");
imagegif($img);
imagedestroy($img);
*/

$jpeg = imagecreatefromjpeg("index.jpg");
$jpeg_w = imagesx($jpeg);
$jpeg_h = imagesy($jpeg);

//$png = imagecreatefrompng("logo.png");
$png = imagecreatefromgif("logo.gif");
$png_w = imagesx($png);
$png_h = imagesy($png);

//imagecopy($jpeg, $png, $jpeg_w-$png_w-10, $jpeg_h-$png_h-10, 0, 0, $png_w, $png_h);
imagecopymerge($jpeg, $png, $jpeg_w-$png_w-20, $jpeg_h-$png_h-20, 0, 0, $png_w, $png_h, 50);

header("content-type:image/jpeg");
imagejpeg($jpeg);
imagedestroy($jpeg)




































?>