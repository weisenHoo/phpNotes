<?php
/*
 * 图像处理类 水印处理_1
 * 
 * */


/*
 * 图片加水印：
 * 
 * 0、水印的默认位置
 * 
 * 0_1、水印是否开启  1开启  0关闭
 * 
 * 1、水印图片或文字
 * 		图片水印
 * 			水印图片
 * 			水印位置
 * 			水印的透明度
 * 		文字水印
 * 			文字内容
 * 			字体
 * 			字体颜色
 * 			字体大小
 * 			水印位置
 * 
 * 2、原图
 * 		判断原图是否存在
 * 		原图是否是一个图片
 * 
 * 3、生成水印
 * 
 * 4、输出文件
 * 		是否在原图上进行操作
 * 		jpeg压缩比
 * */


class image{
	//是否应用水印
	private $watermark_on;
	//水印图片
	public $water_img = "logo.png";
	//水印的位置
	public $pos;
	//水印的透明度
	public $pct;
	//图像的压缩比
	public $quality = 80;
	
	//水印文字内容
	public $text;
	//水印文字大小
	public $text_size = 12;
	//水印文字颜色
	public $text_color = "#000000";
	//水印文字字体
	public $font = "font/FZLTCXHJW.TTF";
	
	/*
	 * 构造函数
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
	 * 环境验证
	 * @param $img   图片路径
	 * */
	private function check($img){
		$type = array(".jpg",".jpeg",".png",".gif");
		$img_type = strtolower(strrchr($img, '.'));
		
		return extension_loaded('gd') && file_exists($img) && in_array($img_type, $type);
	}
	
	/*
	 * 水印处理
	 * @param $img			操作的图像
	 * @param $out_img		另存的图像
	 * @param $water_img	水印图片
	 * @param $pos			水印位置
	 * @param $text			文字水印内容
	 * @param $pct			透明度
	 * @return boolen
	 * */
	public function watermark($img,$out_img='',$water_img='',$pos='',$text="",$pct=''){
		//验证原图像
		if(!$this->check($img) || !$this->watermark_on) return FALSE;
		//验证水印图像
		$water_img = $water_img?$water_img:$this->water_img;
		$waterimg_on = $this->check($water_img)?1:0;
		//判断另存图像
		$out_img = $out_img?$out_img:$img;
		//水印位置
		$pos = $pos?$pos:$this->pos;
		//水印文字
		$text = $text?$text:$this->text;
		//水印透明度
		$pct = $pct?$pct:$this->pct;
		
		$img_info = getimagesize($img);
		$img_w = $img_info[0];
		$img_h = $img_info[1];
		//获得水印信息
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
		
		//建立原图资源
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
		
		//水印位置处理方法
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