<?php
/*
 * 图像处理类 水印处理_2
 * 
 * */

 
include '../105/105.php';

$img = new image();
$img->text_size = 100;
$img->watermark('gaoda.jpg','g_gaoda.jpg','timg.jpg',10,"houdunwnag",50);

?>
<img src="g_gaoda.jpg" width="900" alt="" />
<?php








































?>