<?php

/*
	array_push(); �������ĩ������һ��������Ԫ�أ���ջ
	array_pop(); ɾ������ĩ��Ԫ�أ���ջ
	array_rand(); ���ȡ������Ԫ�أ������ȡ�ö��Ԫ�ط���Ԫ�����������飬����ֻ�������Ԫ�ص�����
	array_reverse(); ��ת����������ڶ�������ָ��ΪTRUE������Ԫ�صļ���
*/

function dump($arr){
	echo "<pre>";
	print_r($arr);
}

/*
$arr = array("webname"=>"�������̳","weburl"=>"bbs.houdunwang.com");
dump($arr);
array_push($arr,"bbs.houdunwang.com");
dump($arr);
array_pop($arr);
dump($arr);
*/


$kaoTi = array(
	array("name"=>"�������������Щ��","type"=>"input"),
	array("name"=>"���˻�����Щ���ٿ���","type"=>"radio","select"=>"1788,1988,2008,1999"),
	array("name"=>"��д��һ������Ŀ¼�ĺ���","type"=>"textarea")
);
/*
tiMu($kaoTi,2);
function tiMu($arr){
	if(!empty($arr)){
		$key = array_rand($arr,1);//���ȡ����
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
		echo "<br/><input type='submit' value='�ύ��' />";
	}
}

//�����ȡ��������
tiMu($kaoTi,2);
function tiMu($arr,$num=''){
	$num = empty($num)?1:$num;
	if(!empty($arr)){
		$tArr = array_rand($arr,$num);//���ȡ����
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
		echo "<input type='submit' value='�ύ��' /><hr/>";
	}
}
*/

//dump(array_rand($kaoTi,2));

$arr3 = array("webname"=>"�����","weburl"=>"houdunwnag.com");
$arr4 = array("a","b","c");
dump(array_reverse($arr4,TRUE));







































?>