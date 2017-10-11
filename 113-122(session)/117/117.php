<?php
/*
 * PHP垃圾处理机制及SESSION的垃圾回收方式
 * 
 * 
 * */

$a = "houdunwang.com";
$b = &$a;
unset($a);
echo $b;















































?>