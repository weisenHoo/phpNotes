<?php
/*
 * 16������ɫԭ�� 
 * ����ͼƬԭ�� 
 * 2���� 8 ���� 16����ԭ�� 
 * ����ͼ������������ɫ��Ϣ
 * 
 * hexdec ʮ������ת��Ϊʮ����
 * decbin ʮ����ת��Ϊ������
 * decoct ʮ����ת��Ϊ�˽���
 * dechex ʮ����ת��Ϊʮ������
 * bindec ������ת��Ϊʮ����
 * bin2hex ������ת��Ϊʮ������
 * octdec �˽���ת��Ϊʮ����
 * 
 * imagecolorat ȡ��ĳ���ص���ɫ����ֵ
 * imagecolorsforindex ȡ��ĳ��������ɫ
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