<?php
/*
	asort(); 对数组按值排序，保留键名
	ksort(); 对数组按键名排序，保留键名
	rsort(); 对数组进行反向排序，不保留键名
	arsort(); 对数组进行反向排序，保留键名
	krsort(); 对数组的键名进行反向排序，保留键名
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

$arr = array(
	"bbs_url"=>"bbs.houdunwnag.com",
	"web_url"=>"www.houdunwang.com",
	"bbs_name"=>"后盾网免费视频分享平台",
	"www.name"=>"后盾网PHP项目开发，LINUX维护，DIVCSS标准化布局，开源产品二次开发，HDCMS发布"
);
//asort($arr);
//ksort($arr);
//rsort($arr);
//arsort($arr);
krsort($arr);
dump($arr);


































?>