<?php
/*
	sort(); 对数组元素进行递增的排序
	natsort(); 通过自然顺序对数组进行排序
	shuffle(); 随机对数组进行排序
	natcasesort(); 不区分字符大小写进行排序
	array_multisort(); 对多个数组或多维数组 进行排序
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr1 = array(5,432,2,21,435,33,22);
$arr2 = array("class1","class2","class12","class32","class21");
$arr3 = array(1,2,3);
//sort($arr1);
//natsort($arr2);
shuffle($arr3);

foreach($arr3 as $k=>$v):
	echo $k."=>".$v."<br/>";
endforeach;
//while for foreach switch
*/

/*
$arr4 = array("a","b","c","d","A","B","C","D");
natcasesort($arr4);
dump($arr4);
*/

$arr5 = array(2,1,3,1);
$arr6 = array(6,5,4,7);
$arr7 = array(
	array(2,1,3,1),
	array(6,5,4,7)
);
array_multisort($arr7[0],SORT_ASC,$arr7[1],SORT_ASC);
dump($arr7);




































?>