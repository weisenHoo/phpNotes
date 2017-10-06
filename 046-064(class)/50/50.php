<?php
/*
 *final 
 *const
 * */
 /*
 class souji{
 	public $pinpai;
 	final function congdian(){
 		return $this->pinpai."通过10v电压来充电";
 	}
	function kaijidonghua(){
		return "<<<  没有开机动画  >>>";
	}
 }
 class moto extends souji{
 	function __construct(){
 		$this->pinpai = "摩托罗拉";
 	}
	function kaijidonghua($neirong){
		return "摩托罗拉商标";
	}
 }
 class sansumg extends souji{
 	function __construct(){
 		$this->pinpai = "三星手机";
 	}
	function kaijidonghua($neirong){
		return "三星手机商标";
	}
 }
 class sony extends souji{
 	function __construct(){
 		$this->pinpai = "索尼手机";
 	}
 }
 
 class ren{
 	private $mingzi;
	function __construct($ming){
		$this->mingzi = $ming;
	}
	function yongsouji($souji){
		$souji = new $souji();
		echo $this->mingzi."的手机开机动画是：".$souji->kaijidonghua()."<br/>";
		echo $this->mingzi."在用".$souji->pinpai."&nbsp;&nbsp;".$souji->congdian();
	}
 }
$lisi = new ren("李四");
$lisi->yongsouji("sony");
 */
 
 
 /*
 final class bangong{
 	private $diannao;//电脑
 	private $chuanzhenji;//传真机
 	private $saomiaoyi;//扫描仪
 	
 	function __construct($diannao,$chuanzhenji,$saomiaoyi){
 		$this->diannao = $diannao;
 		$this->chuanzhenji = $chuanzhenji;
 		$this->saomiaoyi = $saomiaoyi;
 	}
 	
 	function seji(){
 		return $this->diannao."来设计";
 	}
	function saomiao(){
		return $this->saomiaoyi."来扫描";
	}
 }
 
 $bangong = new bangong("联想电脑","三星传真机","艾克发");
 echo $bangong->seji();
 */
 
 /*
 define("WEBNAME","后盾网");
 echo WEBNAME;
 */
 
 class caiwu{
 	const suilv=0.05;
	function __construct(){
		
	}
	function kaigonzi($xingming,$gongzi){
		$gongzi = $gongzi-$gongzi*self::suilv;
		return $xingming."的工资是".$gongzi."元";
	}
 }
 
 class yuangong{
 	private $xingming;//姓名
 	private $gongzishu;//工资数
 	
 	function __construct($xingming,$gongzishu){
 		$this->xingming = $xingming;
		$this->gongzishu = $gongzishu;
 	}
	function kaizi(){
		$caiwu = new caiwu();
		return $caiwu->kaigonzi($this->xingming,$this->gongzishu);
	}
 }
 
 $lisi = new yuangong("李四","3500");
 echo $lisi->kaizi();
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>