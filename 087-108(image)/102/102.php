<?php
/*
 * ͼ������ɫ�ʿ��� ������
 * 
 * imageistruecolor ���ͼ���Ƿ�Ϊ���ɫͼ��
 * imagetruecolortopalette �����ɫͼ��ת��Ϊ��ɫ��ͼ��
 * imagecolorat ȡ��ĳ���ص���ɫ����ֵ
 * imagecolorsforindex ȡ��ĳ��������ɫ
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