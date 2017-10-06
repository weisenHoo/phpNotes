<?php
/*
	range(); 生成包含指定范围的数组，第三个参数是步长值
	array_count_values(); 统计数组中值出现的次数，返回统计数组
	array_pad(); 对数组进行填充，第二个参数如果是负数，从左侧添加，整数为右侧，第三个参数为填充内容
	array_product(); 对数组中的键值进行乘积的运算，返加数值类型
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr0 = range(1,10,2);
dump($arr0);
*/

/*
$tdArr = range(1,8);
$trArr = range(1,20);
?>
<table border="1" width="800" cellpadding="2" cellspacing="1">
<?php
foreach($trArr as $tr){
	?>
	<tr>
		<?php
		foreach($tdArr as $td){
			?>
			<td align="center"><?php echo $td; ?></td>
			<?php
		}
		?>
	</tr>
	<?php
}
?>
<table>
<?php
*/

/*
$arr = array("后盾网","新浪网","后盾网","腾讯网","facebook","google","taobao","迅雷网","taobao","yahoo","新浪网");
dump(array_count_values($arr));
*/

/*
$arr = array(1,2,3);
$newArr = array_pad($arr,6,"9");
dump($newArr);
*/


$arr = array(2,3,3);
echo array_product($arr);































?>