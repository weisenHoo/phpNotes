<?php
header("Content-type: text/html; charset=utf-8");

/*
	array_unique(); 清除数组中的重复项
	array_unshift(); 向数组的顶部最加数据元素
	array_shift(); 删除数组第一个元素，如果删除失败返回null
	array_pop(); 删除数组最后一个元素，如果删除失败返回null
	array_keys(); 得到数组的键名，以数组的凡是返回
	array_values(); 得到数组的键值，以数组的凡是返回
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

$arr1 = array("苹果","梨","桃","梨","苹果");
/*
$arr0 = array_unique($arr1);
//dump($arr0);
foreach($arr0 as $key=>$vaules){
//	echo "<h1>请选择数量</h1><br/><b>{$vaules}</b>:&nbsp;&nbsp;数量:<input type='text' name='shom_num'><br/>";
	?>
	<h1>请选择数量</h1>
	<b><?php echo $vaules; ?></b>&nbsp;&nbsp;数量:<input type='text' name='shom_num'><br/>
	<?php
}
*/

//$arr1[] = "葡萄";
//array_unshift($arr1,"葡萄");
//array_shift($arr1);
//array_pop($arr1);

$arr2 = array("uname"=>"李飞","age"=>"22","sex"=>"男","qq"=>"2423143","msn"=>"dsfds@hotmail.com");
$keys = array_keys($arr2);
$values = array_values($arr2);
//$fileds = implode(",",$keys);
foreach($keys as $v){
	@$key.="'".$v."',";
}
$key = rtrim($key,",");
foreach($values as $v){
	@$value .= "'".$v."',";
}
$value = rtrim($value,",");
$sql_insert = "INSERT INTO db_user({$key}) VALUES({$value})";
echo $sql_insert;





























?>