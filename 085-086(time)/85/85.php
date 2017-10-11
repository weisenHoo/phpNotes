<?php
/*
 * 日期时间_时区时间戳time mktime strtotime函数使用
 * */
 
date_default_timezone_set('PRC');

//24个时区 1-23小时

//UTC 通用协调时间 = 格林威治时间 GMT = 英国伦敦的本地时间 0时区

//北京时间 东八区 与零时区相差8小时

//  PRC  ASia/chongqing  Asia/shanghai  Asia/urumqi  东八区

/*
date_default_timezone_set('PRC');
echo date("Y-m-d H:i:s");
echo "<br/>";
echo date_default_timezone_get();
*/


//unix时间戳
//32 二进制表示 -2147483648 +2147483648  1901年X月X日  2038年
//1970年1月1日0时0分0秒  UNIX世纪元
//window  一部分LINUX系统中  无法表示负的时间戳，1970年1月1日UNIX世纪元年计算到指定时间所经过的秒数


/*
//便于计算 UNIX时间戳不受操作系统的影响
$t1 = strtotime("2008/6/9");
$t2 = strtotime("2017/6/9");
echo ($t2-$t1)/60/60/24/30/12;
*/


echo time();//当前时间的时间戳
echo "<br/>";
echo mktime(3,32,45,5,6,2017);
echo "<br/>";
echo date('Y-m-d h:i:s');
echo "<br/>";
echo gmmktime(3,32,45,5,6,2017);

echo "<br/>";
echo date('Y-m-d h:i:s',time());

echo "<br/>";
echo date('Y-m-d h:i:s',strtotime("+1 weeks"));






























?>