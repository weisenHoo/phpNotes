<?php
/*
 * 2017-01-17
 * */

class Pc{
	public $yanse;
	public $pinpai;
	function wangyouxi(){
		echo "����Ϸ����";
	}
	function shangwang(){
		echo "��������";
	}
	function tingge(){
		echo "���衭��";
	}
}

$houdunwnag_pc = new Pc();
$houdunwnag_pc->pinpai = "IBM";
$houdunwnag_pc->yanse = "��ɫ";
$houdunwnag_pc->wangyouxi();

echo "<br/>";

$zhangsan = new Pc();
$zhangsan->pinpai = "sony";
$zhangsan->yanse = "��ɫ";
$zhangsan->tingge();


class ArcChannel{
	public $arcChannelId;
	function channelEdit(){
		echo "�༭������Ŀ����";
	}
}

$arcChannel = new ArcChannel();
$arcChannel->channelEdit();










































?>