<?php
/*
 * 图像处理 
 * 建立画布 
 * 打开不同图像类型处理_1
 * 
 *  getimagesize 取得图像大小
 *  imagecreate 新建一个基于调色板的图像
 * 	imagecreatetruecolor 新建一个真彩色图像
 *  imagecreatefrompng 由文件或 URL 创建一个新图象
 * 	imagecolorallocate 为一幅图像分配颜色
 * 	imagefill 区域填充
 *  imagejpeg 输出图象到浏览器或文件
 * 
 * */
/*
$ingInfo = getimagesize("https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=945223648,292684188&fm=80&w=179&h=119&img.JPEG");
echo "<pre>";
print_r($ingInfo);
echo "<hr/>";
echo image_type_to_extension($ingInfo[2]);
echo "<br/>";
echo image_type_to_mime_type($ingInfo[2]);
*/

/*
$img_png = imagecreatefrompng('logo.png');
echo "logo.png的高度是：".imagesy($img_png)."<br/>";
echo "logo.png的宽度是：".imagesx($img_png)."<br/>";
*/ 


//echo imagecolorstotal($gif_img);

/*
header("content-type:image/jpeg");
$gif_img = imagecreate(600,600);
$jpg_img = imagecreatetruecolor(600, 600);//真彩色
imagecolorallocate($jpg_img, 0, 0, 0);

imagejpeg($jpg_img);
imagedestroy($jpg_img);
*/

/*
header("content-type:image/gif");
$gif = imagecreate(500, 200);
$red = imagecolorallocate($gif, 255, 0, 0);
imagegif($gif);
*/

header("content-type:image/jpeg");
$jpeg = imagecreate(200, 600);
$red = imagecolorallocate($jpeg, 30, 60, 90);
imagejpeg($jpeg);
imagedestroy($jpeg);






























?>