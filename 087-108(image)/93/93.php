<?php
/*
 * 16进制颜色原理 
 * 反向图片原理 
 * 2进制 8 进制 16进制原理 
 * 操作图像像素与获得颜色信息
 * 
 * hexdec 十六进制转换为十进制
 * decbin 十进制转换为二进制
 * decoct 十进制转换为八进制
 * dechex 十进制转换为十六进制
 * bindec 二进制转换为十进制
 * bin2hex 二进制转换为十六进制
 * octdec 八进制转换为十进制
 * 
 * imagecolorat 取得某像素的颜色索引值
 * imagecolorsforindex 取得某索引的颜色
 * 
 * */

/*
$img = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($img, 255, 0, 0);
imagefill($img, 0, 0, $red);
header("content-type:image/jpeg");
imagejpeg($img,null,30);
*/

/*
$img = imagecreatefromjpeg("index.jpg");
//header("content-type:image/jpeg");
imagejpeg($img,"index2.jpg",30);
*/

/*
$img = imagecreatetruecolor(200, 200);
$red = imagecolorallocate($img, 255, 0, 0);
imagesetthickness($img, 10);
imagerectangle($img, 20, 20, 180, 180, $red);
header("content-type:image/jpeg");
imagejpeg($img,null,30);
*/

/*
$color1 = "#3e37df";
$red = hexdec(substr($color1, 1, 2));
$green = hexdec(substr($color1, 3, 2));
$blue = hexdec(substr($color1, 5, 2));

$img = imagecreatetruecolor(500, 500);
$color2 = imagecolorallocate($img, $red, $green, $blue);
imagefill($img, 0, 0, $color2);

header("content-type:image/jpeg");
imagejpeg($img);
*/

//echo hexdec(10);
//echo decbin(10);
//echo decoct(10);

/*
$img = imagecreatefromjpeg("index.jpg");
$index = imagecolorat($img, 20, 36);
//echo "#".dechex($index);
$color_arr = imagecolorsforindex($img, $index);
echo "<pre>";
print_r($color_arr);
*/


echo 0x11;


















?>