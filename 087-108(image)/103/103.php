<?php
/*
 * ͼ������ɫ�ʿ��� ������2
 * 
 * imagecolortransparent ��ĳ����ɫ����Ϊ͸��ɫ
 * 
 * */


$gif = imagecreatefromgif("logo.gif");
$index = imagecolortransparent($gif);

/*
$jpg = imagecreatefromjpeg("index.jpg");
$color = imagecolorat($jpg, 10, 10);
$arr = imagecolorsforindex($jpg, $color);
echo $color;
var_dump($arr);
*/

//echo imagecolorstotal($gif);

/*
$info = getimagesize("index.jpg");
$jpg = imagecreatefromjpeg("index.jpg");

imagetruecolortopalette($jpg, true, 4);
imagecolortransparent($jpg, 1);

$img = imagecreatetruecolor($info[0]+20, $info[1]+20);
imagefill($img, 0, 0, imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)));
imagecopy($img, $jpg, 10, 10, 0, 0, $info[0], $info[1]);

header("content-type:image/gif");
imagejpeg($img);
*/

/*
$gif = imagecreatefromgif("logo.gif");

//���͸��ɫ������
$gif_index = imagecolortransparent($gif);
//���͸��ɫ��rgbֵ
$gif_rgb = imagecolorsforindex($gif, $gif_index);
//��������
$img = imagecreatetruecolor(400, 400);
//�趨�����ɫ
$bg_color = imagecolorallocate($img, $gif_rgb['red'], $gif_rgb['green'], $gif_rgb['blue']);
//��仭��
imagefill($img, 0, 0, $bg_color);

imagecopyresampled($img, $gif, 0, 0, 0, 0, 400, 400, imagesx($gif), imagesy($gif));

//�趨�����ɫΪ͸��ɫ
imagecolortransparent($img, $bg_color);

header("content-type:image/gif");
imagegif($img);
*/

/*
$gif = imagecreatefromgif("logo.gif");
$img = imagecreate(500, 500);
$bg_color = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $bg_color);

imagecopyresampled($img, $gif, 0, 0, 0, 0, 500, 500, imagesx($gif), imagesy($gif));

imagecolortransparent($img, $bg_color);

header("content-type:image/gif");
imagegif($gif);
*/
































?>