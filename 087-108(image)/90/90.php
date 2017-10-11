<?php
/*
 * 颜色或图像填充及不同填充方式
 * */

/*
$img = imagecreatetruecolor(300, 300);
$img2 = imagecreate(300, 300);
//$red = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
$alpha_color = imagecolorallocatealpha($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), 0);
imagefill($img, 0, 0, $alpha_color);

//$png = imagecreatefrompng("logo.png");
//imagecopy($png, $img, 0, 0, 0, 0, 300, 300);

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$img = imagecreatefrompng("logo.png");
$color = imagecolorallocate($img, 200, 122, 0);
imagefill($img, 100, 0, $color);
$border = imagecolorat($img, 316, 49);
imagefilltoborder($img, 0, 0, $border, $color);
header("content-type:image/png");
imagepng($img);
*/

$img = imagecreatefrompng("logo.png");
$img2 = imagecreatetruecolor(500, 500);
imagesettile($img2, $img);
$color = imagecolorallocate($img2, 0, 255, 0);
imagefill($img2, 0, 0, IMG_COLOR_TILED);

header("content-type:image/jpeg");
imagejpeg($img2);












































?>