<?php
/*
 * 图像处理类4 各种缩略图处理方式
 * 
 * */

include '../107/107.php';

$img = new image();
//$img->text_size = 100;
//$img->watermark('gaoda.jpg','g_gaoda.jpg','timg.jpg',10,"houdunwnag",50);

$fileName = "gaoda.jpg";
$img->thumb($fileName);


$imgType = (strrchr($fileName, '.')==".jpg")?'.jpeg':strrchr($fileName, '.');
$imgInput = substr($fileName, 0, strpos($fileName, '.')).$img->thumb_fix.$imgType;
?>
<img src="<?php echo $imgInput; ?>" alt="" />
<?php












































?>