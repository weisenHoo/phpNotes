<?php
/*
 * ͼ���� 
 * �������� 
 * �򿪲�ͬͼ�����ʹ���_1
 * 
 *  getimagesize ȡ��ͼ���С
 *  imagecreate �½�һ�����ڵ�ɫ���ͼ��
 * 	imagecreatetruecolor �½�һ�����ɫͼ��
 *  imagecreatefrompng ���ļ��� URL ����һ����ͼ��
 * 	imagecolorallocate Ϊһ��ͼ�������ɫ
 * 	imagefill �������
 *  imagejpeg ���ͼ����������ļ�
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
echo "logo.png�ĸ߶��ǣ�".imagesy($img_png)."<br/>";
echo "logo.png�Ŀ���ǣ�".imagesx($img_png)."<br/>";
*/ 


//echo imagecolorstotal($gif_img);

/*
header("content-type:image/jpeg");
$gif_img = imagecreate(600,600);
$jpg_img = imagecreatetruecolor(600, 600);//���ɫ
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