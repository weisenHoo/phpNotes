<?php
/*
 * 图像处理——色彩控制 处理函数3
 * 
 * imagecolorexact 取得指定颜色的索引值
 * imagecolorexactalpha 取得指定的颜色加透明度的索引值
 * 
 * imagefilter 对图像使用过滤器:
 * 
	    IMG_FILTER_NEGATE：将图像中所有颜色反转。
	    IMG_FILTER_GRAYSCALE：将图像转换为灰度的。
	    IMG_FILTER_BRIGHTNESS：改变图像的亮度。用 arg1 设定亮度级别。
	    IMG_FILTER_CONTRAST：改变图像的对比度。用 arg1 设定对比度级别。
	    IMG_FILTER_COLORIZE：与 IMG_FILTER_GRAYSCALE 类似，不过可以指定颜色。用 arg1，arg2 和 arg3 分别指定 red，blue 和 green。每种颜色范围是 0 到 255。
	    IMG_FILTER_EDGEDETECT：用边缘检测来突出图像的边缘。
	    IMG_FILTER_EMBOSS：使图像浮雕化。
	    IMG_FILTER_GAUSSIAN_BLUR：用高斯算法模糊图像。
	    IMG_FILTER_SELECTIVE_BLUR：模糊图像。
	    IMG_FILTER_MEAN_REMOVAL：用平均移除法来达到轮廓效果。
	    IMG_FILTER_SMOOTH：使图像更柔滑。用 arg1 设定柔滑级别。
 * 
 * 
 * */

/*
$img = imagecreatefromgif("logo.gif");

//echo imagecolorexact($img, 143, 195, 31);

echo imagecolorexactalpha($img, 143, 195, 31, 127);


*/


$img = imagecreatefromjpeg("index.jpg");

/*
for($i=0;$i<150;$i++){
	imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
}
*/

//反向处理
//imagefilter($img, IMG_FILTER_NEGATE);

//转为灰度
//imagefilter($img, IMG_FILTER_GRAYSCALE);

//调整亮度
//imagefilter($img, IMG_FILTER_BRIGHTNESS, 100);

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);





































?>