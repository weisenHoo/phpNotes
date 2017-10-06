<?php

/*
	array_push(); 在数组的末端增加一个或多个个元素，入栈
	array_pop(); 删除数组末端元素，出栈
	array_rand(); 随机取得数组元素，如果是取得多个元素返回元素索引的数组，单个只返回这个元素的索引
	array_reverse(); 反转函数，如果第二个参数指定为TRUE，保留元素的键名
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr = array("webname"=>"后盾网论坛","weburl"=>"bbs.houdunwang.com");
dump($arr);
array_push($arr,"bbs.houdunwang.com");
dump($arr);
array_pop($arr);
dump($arr);
*/


$kaoTi = array(
	array("name"=>"后盾网都开了那些课","type"=>"input"),
	array("name"=>"奥运会是那些年召开的","type"=>"radio","select"=>"1788,1988,2008,1999"),
	array("name"=>"请写出一个遍历目录的函数","type"=>"textarea")
);
/*
tiMu($kaoTi,2);
function tiMu($arr){
	if(!empty($arr)){
		$key = array_rand($arr,1);//随机取的题
		switch($arr[$key]['type']){
			case 'input':
				echo "{$arr[$key]['name']}:<input type='text' name='dn' />";
				break;
			case 'radio':
				echo "{$arr[$key]['name']}:";
				$select = explode(",",$arr[$key]['select']);
				foreach($select as $k=>$v){
					echo "<input type='radio' name='dn' />{$v}&nbsp;&nbsp;&nbsp;";					
				}
				break;
			case 'textarea':
				echo "{$arr[$key]['name']}<br/><textarea row=40 col=50 name='dn'></textarea>";
				break;
		}
		echo "<br/><input type='submit' value='提交答案' />";
	}
}

//随机抽取两个函数
tiMu($kaoTi,2);
function tiMu($arr,$num=''){
	$num = empty($num)?1:$num;
	if(!empty($arr)){
		$tArr = array_rand($arr,$num);//随机取的题
		$i = 0;
		while($i<$num){
			$key = is_array($tArr)?$tArr[$i]:$tArr;
			switch($arr[$key]['type']){
				case 'input':
					echo "{$arr[$key]['name']}:<input type='text' name='dn' /><br/>";
					break;
				case 'radio':
					echo "{$arr[$key]['name']}:";
					$select = explode(",",$arr[$key]['select']);
					foreach($select as $k=>$v){
						echo "<input type='radio' name='dn' />{$v}&nbsp;&nbsp;&nbsp;";					
					}
					echo "<br/>";
					break;
				case 'textarea':
					echo "{$arr[$key]['name']}<br/><textarea row=40 col=50 name='dn'></textarea><br/>";
					break;
			}			
			$i++;						
		}
		echo "<input type='submit' value='提交答案' /><hr/>";
	}
}
*/

//dump(array_rand($kaoTi,2));

$arr3 = array("webname"=>"后盾网","weburl"=>"houdunwnag.com");
$arr4 = array("a","b","c");
dump(array_reverse($arr4,TRUE));







































?>