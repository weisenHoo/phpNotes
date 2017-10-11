<?php
/*
 * 处理文字及获得文字尺寸属性
 * 
 * imagettftext
 * iconv
 * imagettfbbox
 * 
 * */


$img = imagecreatetruecolor(600, 600);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$black = imagecolorallocate($img, 0, 0, 0);
//imagestring($img, 5, 10, 10, "houdunwang", $black);
$fontfile = "font/FZLTCXHJW.TTF";
$c = imagettftext($img, 18, 0, 10, 580, $black, $fontfile, iconv("gbk", "utf-8", "后盾网论坛：http://bbs.houdunwang.com"));
//var_dump($c);
$d = imagettfbbox(24, mt_rand(0, 360), $fontfile, iconv("gbk", "utf-8", "后盾网论坛：http://bbs.houdunwang.com"));

echo "我们刚写的后盾网三个字的尺寸<br/>";
echo "宽度：".$d[2]-$d[6]."<br/>";
echo "高度：".$d[3]-$d[7]."<br/>";
var_dump($d);

//header("content-type:image/jpeg");
//imagejpeg($img);
//imagedestroy($img);














































?>