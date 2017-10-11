<?php
/*
 * �������OOP˼��ʵ��ͼ����֤��
 * 
 * */

/*
 * test����

$img = imagecreatetruecolor(600, 600);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$black = imagecolorallocate($img, 0, 0, 0);
$fontfile = "font/FZLTCXHJW.TTF";
imagettftext($img, 18, 0, 10, 300, $black, $fontfile, iconv("gbk", "utf-8", "�������̳��http://bbs.houdunwang.com"));

header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*/

/*
 * �������Ҫ��һ����վ
 * 
 * 1����ҳ���
 * 2�����򿪷�
 * 3���ռ������
 * 4������ά��
 * 
 * ����
 * 1�����
 * 2������ ASP .NET JSP PHP
 * 
 * */

/*
 * ��֤�룺����
 * 
 * 1�������������  �߶�  ������ɫ
 * 2��������֤�룺32dskjdskjs  ��֤�볤��
 * 3��д��֤����֣����ִ�С  ����  ������ɫ
 * 4��������֤��
 * 5�����ߣ���㻮��  ��  ֱ��  ����  Բ
 * 6����ʾ��֤�룺���  gif jpeg png
 * 
 * �������ԣ�ͼƬ��Դ
 * 
 * */

class checkcode{
	//��Դ
	private $img;
	//�������
	public $width = 85;
	//�����߶�
	public $height = 25;
	//������ɫ
	public $bg_color = "#dcdcdc";
	//��֤��
	public $code;
	//��֤����������
	public $code_str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//��֤�볤��
	public $code_len = 4;
	//��֤������
	public $font;
	//��֤�������С
	public $font_size = 16;
	//��֤��������ɫ
	public $font_color = "#222222";
	
	/*
	 * ���캯��
	 * */
	public function __construct(){
		$this->font = "font".DIRECTORY_SEPARATOR."arial.ttf";
	}
	
	/*
	 * ������֤��
	 * */
	private function create_code(){
		$code = '';
		for($i=0;$i<$this->code_len;$i++){
			$code.=$this->code_str[mt_rand(0, strlen($this->code_str)-1)];
		}
		$this->code = $code;
	}
	
	/*
	 * ������֤��
	 * */
	public function getcode(){
		return strtoupper($this->code);
	}
	
	/*
	 * ������
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
	 * д����֤������
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
	 * ����
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
	 * ��ʾ��֤��
	 * */
	public function show_code(){
		header("content-type:image/png");
		imagepng($this->img);
		imagedestroy($this->img);
	}
	
	/*
	 * ��֤GD���Ƿ��imagepng�����Ƿ����
	 * */	
	private function checkgd(){
		return extension_loaded('gd')&&function_exists("imagepng");
	}
}






















?>