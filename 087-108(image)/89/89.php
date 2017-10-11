<?php
/*
 * 建立画布 
 * 打开不同图像类型处理_2
 * 
 * */

/*
$fileName = "logo.png";
if(!file_exists($fileName)){
	echo "文件不存在";
	exit;
}

$imgInfo = getimagesize($fileName);

//$base = image_type_to_extension($imgInfo[2]);
//$base = strtolower(strrchr($fileName, '.'));

//$base = substr(getimagesize($fileName)['mime'], 6);
$base = substr(strrchr($imgInfo['mime'], '/'), 1) ;
//$base = substr(strtolower(strrchr($fileName, '.')), 1);


//switch($base){
//	case 'gif':
//		$img = imagecreatefromgif($fileName);
//		break;
//	case 'jpeg':
//		$img = imagecreatefromjpeg($fileName);
//		break;
//	case 'jpg':
//		$img = imagecreatefromjpeg($fileName);
//		break;
//	case 'png':
//		$img = imagecreatefrompng($fileName);
//		break;
//	default:
//		die("错误：文件类型不正确");
//}


eval('$img = imagecreatefrom'.$base.'($fileName);');//把字符串作为PHP代码执行

header("Content-Type:image/{$base}");

imagejpeg($img);
*/


/*
$str = file_get_contents("logo.png");
file_put_contents('image.txt', $str);
*/


//$img = imagecreatefromstring("image.txt");
//header("content-type:image/jpeg");
//imagejpeg($img);

$str = file_get_contents("image.txt");
$img = imagecreatefromstring($str);
header("content-type:image/jpeg");
imagejpeg($img);































?>