<?php
/*
 * ͨ��������ʵ���ļ�����
 * */

/*
 * 
 * */

function delEmpty($v){
	return $v!='';
}
$upName = array_filter($_FILES['upfile']['name'],'delEmpty');

$mysqli = new mysqli('localhost','root','','file');
foreach($upName as $k=>$v){
	if(is_uploaded_file($_FILES['upfile']['tmp_name'][$k])){
		$newPath = 'upload/'.time().$v;
		move_uploaded_file($_FILES['upfile']['tmp_name'][$k],$newPath);
//		$sql = "INSERT INTO upload ('fname','fpath','fsize') VALUES('{$v}','{$newPath}',".filesize($newPath).")";
		$sql = "insert `upload`(`fname`,`fpath`,`fsize`) values('{$v}','{$newPath}',".filesize($newPath).");";
		$mysqli->query($sql);
	}
}
echo "<script>alert('�ϴ��ɹ�');history.go(-1);</script>";







































?>