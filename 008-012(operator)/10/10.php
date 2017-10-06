<?php
header("Content-type: text/html; charset=utf-8");

/*
//5、位逻辑运算符
	1：& 按位与  		左右两边的数，同位都为1  返回 1  否则 0
	2：| 按位或  		只有当同位都为0时，返回 0  否则 1
	3：^ 按位异或  	只有当同位不同时，返回 1 否则返回 0
	4：~ 按位非 	 	将位中的1变为0,0变为1
	
	位移运算符
	5：<<  左移		将左边的二进制位左移右边数指定数量的位，右边空位补0
	6：>>  右移		将左边的二进制位右移边数指定数量的位，左边空位补0





*/

$a = 5;
$b = 6;
/*
$a = decbin($a);// 函数把十进制转换为二进制
$b = base_convert($b,10,2);//函数在任意进制之间转换数字
*/
echo decbin($a)."<br/>";
//echo base_convert($b,10,2)."<br/>";

//echo $a."<br/>".$b;
echo "<hr/>";
//echo $a & $b;
//echo $a | $b;
//echo decbin($a ^ $b);
//echo decbin(~$a);
//echo decbin($a << 1);
echo decbin($a >> 1);























































?>