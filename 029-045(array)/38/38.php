<?php
header("Content-type: text/html; charset=utf-8");

/*
	compact(); 将多个变量转化为数组，变量名为数组键名 变量值为数组键值
	extract(); 将数组转化为变量 键名作为变量名 键值为变量值
	in_array(); 判断元素是否存在于数组中，如果加参数TRUE，同时进行数据类型的判断，返回BOOL类型值
*/

function dump($arr){
    echo "<pre>";
    print_r($arr);
}

/*
$webname = "后盾网";
$weburl = "bbs.houdunwnag.com";
$hdcms = "cms.houdunwang.com";
$hdw_var = array('webname','weburl','hdcms');
//$hdwArr = compact('webname','weburl','hdcms');
$hdwArr = compact($hdw_var);
dump($hdwArr);
*/

/*
$webname = "后盾网免费视频分享平台";
$hdwGlobal = array(
    "weburl"=>"bbs.houdunwnag.com",
    "webname"=>"后盾网",
    "hdcms"=>"cms.houdunwnag.com",
    "后盾网论坛"
);
var_dump(extract($hdwGlobal,EXTR_REFS,'hdw'));
echo $hdcms."<br/>";
$hdwGlobal['hdcms'] = "后盾CMS系统，无论个人，企业，政府，团体均免费使用";
echo $hdcms;

$v = 100;
a($v);
function a(&$b){
	$b+=200;
}
echo '<br/>$v='.$v;
*/


$hdw_config = array("webname"=>"后盾网论坛","weburl"=>"bbs.houdunwang.com");
$arr2 = array(1,2,3,4,5);
//var_dump(in_array("后盾网论坛",$hdw_config));
$ON = in_array(1,$arr2,TRUE)?"元素存在数组中":"元素不存在";
echo $ON;


























?>