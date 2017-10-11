<?php
/*
 * flock 轻便的咨询文件锁定
 * 		LOCK_SH 取得共享锁定（读取的程序）。
 * 		LOCK_EX 取得独占锁定（写入的程序。
 * 		LOCK_UN 释放锁定（无论共享或独占）
 * 
 * pathinfo 以数组形式，返回文件路径的信息
 * realpath 返回规范化的绝对路径名
 * tmpfile 建立一个临时文件
 * tempnam 建立一个具有唯一文件名的文件
 * 
 * */

/*
$arr = pathinfo("../78/a.txt");
echo "<pre>";
print_r($arr);

echo "<br/>";
echo realpath($arr['dirname']);

echo "<br/>";
echo dirname(__FILE__);
echo "<br/>";
echo realpath('.');
*/

$fileName = tempnam(".",'ho-');
echo $fileName;









































?>