<?php
/*
 * ͼ������ɫ�ʿ��� ������3
 * 
 * imagecolorexact ȡ��ָ����ɫ������ֵ
 * imagecolorexactalpha ȡ��ָ������ɫ��͸���ȵ�����ֵ
 * 
 * imagefilter ��ͼ��ʹ�ù�����:
 * 
	    IMG_FILTER_NEGATE����ͼ����������ɫ��ת��
	    IMG_FILTER_GRAYSCALE����ͼ��ת��Ϊ�Ҷȵġ�
	    IMG_FILTER_BRIGHTNESS���ı�ͼ������ȡ��� arg1 �趨���ȼ���
	    IMG_FILTER_CONTRAST���ı�ͼ��ĶԱȶȡ��� arg1 �趨�Աȶȼ���
	    IMG_FILTER_COLORIZE���� IMG_FILTER_GRAYSCALE ���ƣ���������ָ����ɫ���� arg1��arg2 �� arg3 �ֱ�ָ�� red��blue �� green��ÿ����ɫ��Χ�� 0 �� 255��
	    IMG_FILTER_EDGEDETECT���ñ�Ե�����ͻ��ͼ��ı�Ե��
	    IMG_FILTER_EMBOSS��ʹͼ�񸡵񻯡�
	    IMG_FILTER_GAUSSIAN_BLUR���ø�˹�㷨ģ��ͼ��
	    IMG_FILTER_SELECTIVE_BLUR��ģ��ͼ��
	    IMG_FILTER_MEAN_REMOVAL����ƽ���Ƴ������ﵽ����Ч����
	    IMG_FILTER_SMOOTH��ʹͼ����Ử���� arg1 �趨�Ử����
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

//������
//imagefilter($img, IMG_FILTER_NEGATE);

//תΪ�Ҷ�
//imagefilter($img, IMG_FILTER_GRAYSCALE);

//��������
//imagefilter($img, IMG_FILTER_BRIGHTNESS, 100);

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);





































?>