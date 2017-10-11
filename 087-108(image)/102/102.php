<?php
/*
 * 图像处理——色彩控制 处理函数
 * 
 * imageistruecolor 检查图像是否为真彩色图像
 * imagetruecolortopalette 将真彩色图像转换为调色板图像
 * imagecolorat 取得某像素的颜色索引值
 * imagecolorsforindex 取得某索引的颜色
 * 
 * */

$jpg = imagecreatefromjpeg("index.jpg");
/*
if(imageistruecolor($jpg)){
	imagetruecolortopalette($jpg, true, 250);
}

header("content-type:image/jpeg");
imagejpeg($jpg);
*/

/*
$img = imagecreate(300, 300);
$rgb = imagecolorat($jpg, mt_rand(0, 384), mt_rand(0, 600));
$arr = imagecolorsforindex($jpg, $rgb);
$color = imagecolorallocate($img, $arr['red'], $arr['green'], $arr['blue']);
imagefill($img, 0, 0, $color);

header("content-type:image/jpeg");
imagejpeg($img);
*/

if(imageistruecolor($jpg)){
	imagetruecolortopalette($jpg, true, 250);
}
$index = imagecolorat($jpg, mt_rand(0, 386), mt_rand(0, 600));
imagecolorset($jpg, $index, 255, 0, 0);

header("content-type:image/jpeg");
imagejpeg($jpg);







































?>