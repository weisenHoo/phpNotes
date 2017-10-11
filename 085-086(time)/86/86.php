<?php
/*
 * 日期时间函数讲解
 * 
 * */

//echo microtime(TRUE);

/*
$timeArr = explode(" ",microtime());
echo "<pre>";
print_r($timeArr);
*/

/*
function mictime(){
	return microtime(true);
}

$time1 = mictime();
for($i=1;$i<=2000;$i++){
	
}
$time2 = mictime();
echo "脚本执行时间为：".round(($time2-$time1),16)."秒";
*/

date_default_timezone_set("PRC");

/*
echo date("Y年m月d日 l h:i:s A z");
echo "<br/>";
echo gmdate("Y年m月d日 l h:i:s A z");
$timeArr = getdate();
echo "<pre>";
print_r($timeArr);
*/

/*
setlocale(LC_ALL, 'chs');
echo strftime("%Y年%m月%d日 %A");
*/

echo "<pre>";
print_r(gettimeofday());
































?>