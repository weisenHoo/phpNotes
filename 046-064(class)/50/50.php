<?php
/*
 *final 
 *const
 * */
 /*
 class souji{
 	public $pinpai;
 	final function congdian(){
 		return $this->pinpai."ͨ��10v��ѹ�����";
 	}
	function kaijidonghua(){
		return "<<<  û�п�������  >>>";
	}
 }
 class moto extends souji{
 	function __construct(){
 		$this->pinpai = "Ħ������";
 	}
	function kaijidonghua($neirong){
		return "Ħ�������̱�";
	}
 }
 class sansumg extends souji{
 	function __construct(){
 		$this->pinpai = "�����ֻ�";
 	}
	function kaijidonghua($neirong){
		return "�����ֻ��̱�";
	}
 }
 class sony extends souji{
 	function __construct(){
 		$this->pinpai = "�����ֻ�";
 	}
 }
 
 class ren{
 	private $mingzi;
	function __construct($ming){
		$this->mingzi = $ming;
	}
	function yongsouji($souji){
		$souji = new $souji();
		echo $this->mingzi."���ֻ����������ǣ�".$souji->kaijidonghua()."<br/>";
		echo $this->mingzi."����".$souji->pinpai."&nbsp;&nbsp;".$souji->congdian();
	}
 }
$lisi = new ren("����");
$lisi->yongsouji("sony");
 */
 
 
 /*
 final class bangong{
 	private $diannao;//����
 	private $chuanzhenji;//�����
 	private $saomiaoyi;//ɨ����
 	
 	function __construct($diannao,$chuanzhenji,$saomiaoyi){
 		$this->diannao = $diannao;
 		$this->chuanzhenji = $chuanzhenji;
 		$this->saomiaoyi = $saomiaoyi;
 	}
 	
 	function seji(){
 		return $this->diannao."�����";
 	}
	function saomiao(){
		return $this->saomiaoyi."��ɨ��";
	}
 }
 
 $bangong = new bangong("�������","���Ǵ����","���˷�");
 echo $bangong->seji();
 */
 
 /*
 define("WEBNAME","�����");
 echo WEBNAME;
 */
 
 class caiwu{
 	const suilv=0.05;
	function __construct(){
		
	}
	function kaigonzi($xingming,$gongzi){
		$gongzi = $gongzi-$gongzi*self::suilv;
		return $xingming."�Ĺ�����".$gongzi."Ԫ";
	}
 }
 
 class yuangong{
 	private $xingming;//����
 	private $gongzishu;//������
 	
 	function __construct($xingming,$gongzishu){
 		$this->xingming = $xingming;
		$this->gongzishu = $gongzishu;
 	}
	function kaizi(){
		$caiwu = new caiwu();
		return $caiwu->kaigonzi($this->xingming,$this->gongzishu);
	}
 }
 
 $lisi = new yuangong("����","3500");
 echo $lisi->kaizi();
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>