<?php
/*
 * ����header�ļ�ͷ��Ϣʵ���ļ�����
 * */

//  image/png  image/gif  image/jpeg
//  application/pdf  application/msword  video/mpeg

header("Content-Type:image/png");//�ĵ�����
header("Content-Disposition:attachment;filename=logo.png");
//html���ı�����
$file = fopen('logo.png','r');
echo fread($file,filesize('logo.png'));//����Դ




























?>