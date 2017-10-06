<?php
/*
 * 2017-01-17
 * */

class Pc{
	public $yanse;
	public $pinpai;
	function wangyouxi(){
		echo "ÍøÓÎÏ·¡­¡­";
	}
	function shangwang(){
		echo "ÉÏÍø¡­¡­";
	}
	function tingge(){
		echo "Ìý¸è¡­¡­";
	}
}

$houdunwnag_pc = new Pc();
$houdunwnag_pc->pinpai = "IBM";
$houdunwnag_pc->yanse = "ºÚÉ«";
$houdunwnag_pc->wangyouxi();

echo "<br/>";

$zhangsan = new Pc();
$zhangsan->pinpai = "sony";
$zhangsan->yanse = "ºìÉ«";
$zhangsan->tingge();


class ArcChannel{
	public $arcChannelId;
	function channelEdit(){
		echo "±à¼­ÎÄÕÂÀ¸Ä¿¡­¡­";
	}
}

$arcChannel = new ArcChannel();
$arcChannel->channelEdit();










































?>