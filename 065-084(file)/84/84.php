<?php
/*
 * 发送header文件头信息实现文件下载
 * */

//  image/png  image/gif  image/jpeg
//  application/pdf  application/msword  video/mpeg

header("Content-Type:image/png");//文档类型
header("Content-Disposition:attachment;filename=logo.png");
//html超文本类型
$file = fopen('logo.png','r');
echo fread($file,filesize('logo.png'));//数据源




























?>