<?php
/*
 * 面向对像OOP思想实现图形验证码
 * 
 * */

/*
 * test测试

$img = imagecreatetruecolor(600, 600);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$black = imagecolorallocate($img, 0, 0, 0);
$fontfile = "font/FZLTCXHJW.TTF";
imagettftext($img, 18, 0, 10, 300, $black, $fontfile, iconv("gbk", "utf-8", "后盾网论坛：http://bbs.houdunwang.com"));

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*/

/*
 * 后盾网需要做一个网站
 * 
 * 1、网页设计
 * 2、程序开发
 * 3、空间服务器
 * 4、后期维护
 * 
 * 属性
 * 1、风格
 * 2、语言 ASP .NET JSP PHP
 * 
 * */

/*
 * 验证码：属性
 * 
 * 1、做画布：宽度  高度  背景颜色
 * 2、生成验证码：32dskjdskjs  验证码长度
 * 3、写验证码的字：文字大小  字体  字体颜色
 * 4、返回验证码
 * 5、画线：随便划线  点  直线  矩形  圆
 * 6、显示验证码：输出  gif jpeg png
 * 
 * 公共属性：图片资源
 * 
 * */

class checkcode{
	//资源
	private $img;
	//画布宽度
	public $width = 85;
	//画布高度
	public $height = 25;
	//背景颜色
	public $bg_color = "#dcdcdc";
	//验证码
	public $code;
	//验证码的随机种子
	public $code_str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//验证码长度
	public $code_len = 4;
	//验证码字体
	public $font;
	//验证码字体大小
	public $font_size = 16;
	//验证码字体颜色
	public $font_color = "#222222";
	
	/*
	 * 构造函数
	 * */
	public function __construct(){
		$this->font = "font".DIRECTORY_SEPARATOR."arial.ttf";
	}
	
	/*
	 * 生成验证码
	 * */
	private function create_code(){
		$code = '';
		for($i=0;$i<$this->code_len;$i++){
			$code.=$this->code_str[mt_rand(0, strlen($this->code_str)-1)];
		}
		$this->code = $code;
	}
	
	/*
	 * 返回验证码
	 * */
	public function getcode(){
		return strtoupper($this->code);
	}
	
	/*
	 * 建画布
	 * */
	public function getimage(){
		$w = $this->width;
		$h = $this->height;
		$bg_color = $this->bg_color;
		if(!$this->checkgd()) return FALSE;
		$img = imagecreatetruecolor($w, $h);
		$bg_color = imagecolorallocate($img, hexdec(substr($bg_color, 1, 2)), hexdec(substr($bg_color, 3, 2)), hexdec(substr($bg_color, 5, 2)));
		imagefill($img, 0, 0, $bg_color);
		$this->img = $img;
		$this->create_font();
		$this->create_pix();
		$this->show_code();
		
	}
	
	/*
	 * 写入验证码文字
	 * */
	private function create_font(){
		$this->create_code();
		$color = $this->font_color;
		$font_color = imagecolorallocate($this->img, hexdec(substr($color, 1, 2)), hexdec(substr($color, 3, 2)), hexdec(substr($color, 5, 2)));
		$x = $this->width/$this->code_len;
		for($i=0;$i<$this->code_len;$i++){
			imagettftext($this->img, $this->font_size, mt_rand(-30, 30), $x*$i+mt_rand(3, 6), mt_rand($this->height/1.2, $this->height-5), $font_color, $this->font, $this->code[$i]);
		}
	}
	
	/*
	 * 画线
	 * */
	private function create_pix(){
		$pix_color = imagecolorallocate($this->img, hexdec(substr($this->font_color, 1,2)), hexdec(substr($this->font_color, 3,2)), hexdec(substr($this->font_color, 5,2)));
		for($i=0;$i<100;$i++){
			imagesetpixel($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), $pix_color);
		}
		for($i=0;$i<2;$i++){
			imagesetthickness($this->img, mt_rand(1, 2));
			imageline($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $pix_color);
		}
		
	}
	
	/*
	 * 显示验证码
	 * */
	public function show_code(){
		header("content-type:image/png");
		imagepng($this->img);
		imagedestroy($this->img);
	}
	
	/*
	 * 验证GD库是否打开imagepng函数是否可用
	 * */	
	private function checkgd(){
		return extension_loaded('gd')&&function_exists("imagepng");
	}
}






















?>