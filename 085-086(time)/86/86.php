<?php
/*
 * ����ʱ�亯������
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
echo "�ű�ִ��ʱ��Ϊ��".round(($time2-$time1),16)."��";
*/

date_default_timezone_set("PRC");

/*
echo date("Y��m��d�� l h:i:s A z");
echo "<br/>";
echo gmdate("Y��m��d�� l h:i:s A z");
$timeArr = getdate();
echo "<pre>";
print_r($timeArr);
*/

/*
setlocale(LC_ALL, 'chs');
echo strftime("%Y��%m��%d�� %A");
*/

echo "<pre>";
print_r(gettimeofday());
































?>