<?php
/*
	range(); ���ɰ���ָ����Χ�����飬�����������ǲ���ֵ
	array_count_values(); ͳ��������ֵ���ֵĴ���������ͳ������
	array_pad(); �����������䣬�ڶ�����������Ǹ������������ӣ�����Ϊ�Ҳ࣬����������Ϊ�������
	array_product(); �������еļ�ֵ���г˻������㣬������ֵ����
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
$arr = array("�����","������","�����","��Ѷ��","facebook","google","taobao","Ѹ����","taobao","yahoo","������");
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