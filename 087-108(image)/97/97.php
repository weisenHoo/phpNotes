<?php
/*
 * ������ֿ������&ͼƬˮӡ��������
 * 
 * imagefontwidth ȡ��������
 * imagefontheight  ȡ������߶�
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
 * �򵥵ļ�ˮӡ����
 * 
 * @param $r_img ԭͼ
 * @param $d_img Ŀ��ͼ
 * @param $str ˮӡ�ַ���
 * @param $color ˮӡ��ɫ
 * @param $pos ˮӡλ��
 * @param $pct jpeg����ͼƬ��ѹ����
 * @param $f_size ˮӡ�����С��С�ڵ���5
 * @return boolen �ɹ�Ϊ��
 * 
 * */
function water($r_img,$d_img="",$str="houdunwang,com",$color="#000000",$pos=1,$pct=80,$f_size=5){
	/*
	 * 1 �Ƿ�֧��DG�⣬�ļ��Ƿ���ڣ��Ƿ���һ��ͼƬ
	 * 2 ���ˮӡ�Ŀ�Ⱥ͸߶ȣ����ˮӡ�Ŀ�ȴ���ͼƬ���Ͳ���ˮӡ
	 * 3 ���������ɫ���������ֵ���ɫ��
	 * 4 ���ˮӡ��x,y���꣬10�ּ�ˮӡ�����
	 * 5 д������
	 * 6 ����ͼƬ
	 * 7 ������Դ
	 * 
	 * */
	 
	if(extension_loaded("gd") && file_exists($r_img) && getimagesize($r_img)){
		
		$str_len = strlen($str);
		//ˮӡ���
		$w = imagefontwidth($f_size)*$str_len;	
		//ˮӡ�߶�
		$h = imagefontheight($f_size);
		//���ͼ����Ϣ
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
		//x,y����
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
		//д��ͼ��
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
	echo "��ˮӡ��";
}else{
	echo "û�����ˮӡ";
	echo water("index.jpg","g_index.jpg");
}





































?>