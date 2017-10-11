<?php
/*
 * 获得文字宽高属性&图片水印函数功能
 * 
 * imagefontwidth 取得字体宽度
 * imagefontheight  取得字体高度
 * 
 * */

/*
$img = imagecreatefromjpeg("index.jpg");
$black = imagecolorallocate($img, 0, 0, 0);
imagestring($img, 5, 10, 580, "http://bbs.houdunwang.com", $black);

header("content-type:image/jpeg");
imagejpeg($img);
*/

/*
$str = "http://bbs.houdunwang.com";
$strLen = strlen($str);
$w = imagefontwidth(5);
$h = imagefontheight(5);

$img = imagecreatetruecolor($w*$strLen, $h*$strLen);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $white);

imagestring($img, 5, 0, 0, $str, $black);
imagestringup($img, 5, 0, $h*$strLen, $str, $black);


header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*/




/**
 * 
 * 简单的加水印函数
 * 
 * @param $r_img 原图
 * @param $d_img 目标图
 * @param $str 水印字符串
 * @param $color 水印颜色
 * @param $pos 水印位置
 * @param $pct jpeg类型图片的压缩比
 * @param $f_size 水印字体大小，小于等于5
 * @return boolen 成功为真
 * 
 * */
function water($r_img,$d_img="",$str="houdunwang,com",$color="#000000",$pos=1,$pct=80,$f_size=5){
	/*
	 * 1 是否支持DG库，文件是否存在，是否是一个图片
	 * 2 获得水印的宽度和高度，如果水印的宽度大于图片，就不加水印
	 * 3 获得文字颜色（定义文字的颜色）
	 * 4 获得水印的x,y坐标，10种加水印的情况
	 * 5 写入文字
	 * 6 储存图片
	 * 7 销毁资源
	 * 
	 * */
	 
	if(extension_loaded("gd") && file_exists($r_img) && getimagesize($r_img)){
		
		$str_len = strlen($str);
		//水印宽度
		$w = imagefontwidth($f_size)*$str_len;	
		//水印高度
		$h = imagefontheight($f_size);
		//获得图像信息
		$i_info = getimagesize($r_img);
		if($i_info[0]<$w && $i_info[1]<$h){
			return FALSE;
		}
		switch($i_info[2]){
			case 1:
				$img = imagecreatefromgif($r_img);
				break;
			case 2:
				$img = imagecreatefromjpeg($r_img);
				break;
			case 3:
				$img = imagecreatefrompng($r_img);
				break;
			default:
				return FALSE;
		}
		if(strlen($color) != 7) return FALSE;	
		$f_color = imagecolorallocate($img, hexdec(substr($color, 1, 2)), hexdec(substr($color, 3, 2)), hexdec(substr($color, 5, 2)));
		//x,y坐标
		switch($pos){
			case 1:
				$x = 8;
				$y = 8;
				break;
			case 2:
				$x = ($i_info[0]-$w)/2;
				$y = 8;
				break;
			case 3:
				$x = $i_info[0]-$w;
				$y = 8;
				break;
			case 4:
				$x = 8;
				$y = ($i_info[1]-$h)/2;
				break;
			case 5:
				$x = ($i_info[0]-$w)/2;
				$y = $i_info[1]/2;
				break;
			default:
				$x = mt_rand(8, $i_info[0]-$w);
				$y = mt_rand(8, $i_info[1]-$h);
		}
		imagestring($img, $f_size, $x, $y, $str, $f_color);
		$d_img = ($d_img != '')?$d_img:$r_img;
		//写入图像
		switch($i_info[2]){
			case 1:
				imagegif($img,$d_img);
				break;
			case 2:
				imagegif($img,$d_img,$pct);
				break;
			case 3:
				imagegif($img,$d_img);
				break;
		}
		imagedestroy($img);
		
		return TRUE;
		
	}else{
		return FALSE;
	}
}


if(water("index.jpg","g_index.jpg")){
	echo "加水印了";
}else{
	echo "没有添加水印";
	echo water("index.jpg","g_index.jpg");
}





































?>