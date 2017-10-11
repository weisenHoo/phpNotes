<?php
/*
 * filemtime 取得文件修改时间
 * filectime 取得文件的内容修改时间
 * fileatime 取得文件的上次访问时间
 * date_default_timezone_set 设定用于一个脚本中所有日期时间函数的默认时区
 * touch  设定文件的访问和修改时间
 * 
 * */

touch('houdunwang.txt',mktime(8,55,33,5,22,2033));
 
date_default_timezone_set("PRC");
echo date('Y-m-d h:i:s',filemtime('houdunwang.txt'));
echo "<br/>";
echo date('Y-m-d h:i:s',filectime('houdunwang.txt'));
echo "<br/>";
echo date('Y-m-d h:i:s',fileatime('houdunwang.txt'));








































?>