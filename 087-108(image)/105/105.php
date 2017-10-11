<?php
/*
 * ͼ������ ˮӡ����_1
 * 
 * */


/*
 * ͼƬ��ˮӡ��
 * 
 * 0��ˮӡ��Ĭ��λ��
 * 
 * 0_1��ˮӡ�Ƿ���  1����  0�ر�
 * 
 * 1��ˮӡͼƬ������
 * 		ͼƬˮӡ
 * 			ˮӡͼƬ
 * 			ˮӡλ��
 * 			ˮӡ��͸����
 * 		����ˮӡ
 * 			��������
 * 			����
 * 			������ɫ
 * 			�����С
 * 			ˮӡλ��
 * 
 * 2��ԭͼ
 * 		�ж�ԭͼ�Ƿ����
 * 		ԭͼ�Ƿ���һ��ͼƬ
 * 
 * 3������ˮӡ
 * 
 * 4������ļ�
 * 		�Ƿ���ԭͼ�Ͻ��в���
 * 		jpegѹ����
 * */


class image{
	//�Ƿ�Ӧ��ˮӡ
	private $watermark_on;
	//ˮӡͼƬ
	public $water_img = "logo.png";
	//ˮӡ��λ��
	public $pos;
	//ˮӡ��͸����
	public $pct;
	//ͼ���ѹ����
	public $quality = 80;
	
	//ˮӡ��������
	public $text;
	//ˮӡ���ִ�С
	public $text_size = 12;
	//ˮӡ������ɫ
	public $text_color = "#000000";
	//ˮӡ��������
	public $font = "font/FZLTCXHJW.TTF";
	
	/*
	 * ���캯��
	 * */
	function __construct(){
		$config = require_once 'config.php';
		$this->watermark_on = $config['web']['watermark_on'];
		$this->conf($config['watermark']);
	}
	private function conf($config){
		$this->water_img = $config['water_img'];
		$this->pos = $config['pos'];
		$this->pct = $config['pct'];
		$this->text = $config['text'];
		
	}
	
	/*
	 * ������֤
	 * @param $img   ͼƬ·��
	 * */
	private function check($img){
		$type = array(".jpg",".jpeg",".png",".gif");
		$img_type = strtolower(strrchr($img, '.'));
		
		return extension_loaded('gd') && file_exists($img) && in_array($img_type, $type);
	}
	
	/*
	 * ˮӡ����
	 * @param $img			������ͼ��
	 * @param $out_img		����ͼ��
	 * @param $water_img	ˮӡͼƬ
	 * @param $pos			ˮӡλ��
	 * @param $text			����ˮӡ����
	 * @param $pct			͸����
	 * @return boolen
	 * */
	public function watermark($img,$out_img='',$water_img='',$pos='',$text="",$pct=''){
		//��֤ԭͼ��
		if(!$this->check($img) || !$this->watermark_on) return FALSE;
		//��֤ˮӡͼ��
		$water_img = $water_img?$water_img:$this->water_img;
		$waterimg_on = $this->check($water_img)?1:0;
		//�ж����ͼ��
		$out_img = $out_img?$out_img:$img;
		//ˮӡλ��
		$pos = $pos?$pos:$this->pos;
		//ˮӡ����
		$text = $text?$text:$this->text;
		//ˮӡ͸����
		$pct = $pct?$pct:$this->pct;
		
		$img_info = getimagesize($img);
		$img_w = $img_info[0];
		$img_h = $img_info[1];
		//���ˮӡ��Ϣ
		if($waterimg_on){
			$w_info = getimagesize($water_img);
			$w_w = $w_info[0];
			$w_h = $w_info[1];
			switch($w_info[2]){
				case 1:
					$w_img = imagecreatefromgif($water_img);
					break;
				case 2:
					$w_img = imagecreatefromjpeg($water_img);
					break;
				case 3:
					$w_img = imagecreatefrompng($water_img);
					break;
			}
		}else{
			if(empty($text) || strlen($this->text_color)!=7) return FALSE;
			$text_info = imagettfbbox($this->text_size, 0, $this->font, $text);
			$w_w = $text_info[2]-$text_info[6];
			$w_h = $text_info[3]-$text_info[7];
		}
		
		//����ԭͼ��Դ
		if($img_h<$w_h || $img_w<$w_h) return FALSE;
		switch($img_info[2]){
			case 1:
				$res_img = imagecreatefromgif($img);
				break;
			case 2:
				$res_img = imagecreatefromjpeg($img);
				break;
			case 3:
				$res_img = imagecreatefrompng($img);
				break;
		}
		
		//ˮӡλ�ô�����
		switch($pos){
			case 1:
				$x = $y = 25;
				break;
			case 2:
				$x = ($img_w-$w_w)/2;
				$y = 25;
				break;
			case 3:
				$x = $img_w-$w_w;
				$y = 25;
				break;
			case 4:
				$x = 25;
				$y = ($img_h-$w_h)/2;
				break;
			case 5:
				$x = ($img_w-$w_w)/2;
				$y = ($img_h-$w_h)/2;
				break;
			case 6:
				$x = $img_w-$w_w;
				$y = ($img_h-$w_h)/2;
				break;
			case 7:
				$x = 25;
				$y = $img_h-$w_h;
				break;
			case 8:
				$x = ($img_w-$w_w)/2;
				$y = $img_h-$w_h;
				break;
			case 9:
				$x = $img_w-$w_w;
				$y = $img_h-$w_h;
				break;
			default:
				$x = mt_rand(25, $img_w-$w_w);
				$y = mt_rand(25, $img_h-$w_h);
		}
		
		if($waterimg_on){
			if($w_info[2]==3){
				imagecopy($res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h);
			}else{
				imagecopymerge($res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h, $pct);
			}			
		}else{
			$r = hexdec(substr($this->text_color, 1, 2));
			$g = hexdec(substr($this->text_color, 3, 2));
			$b = hexdec(substr($this->text_color, 5, 2));
			$color = imagecolorallocate($res_img, $r, $g, $b);
			imagettftext($res_img, $this->text_size, 0, $x, $y, $color, $this->font, $text);
		}
		switch($img_info[2]){
			case 1:
				imagegif($res_img, $out_img);
				break;
			case 2:
				imagejpeg($res_img, $out_img, $this->quality);
				break;
			case 3:
				imagepng($res_img, $out_img);
				break;
		}
		if(isset($res_img)) imagedestroy($res_img);
		if(isset($w_img)) imagedestroy($w_img);
		return TRUE;
	}
}










































?>