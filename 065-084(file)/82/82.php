<?php
/*
 * ����ļ��ϴ�����
 * 
 * */

/*
echo "<pre>";
print_r($_FILES);
*/

/*
 * �����������
 * */
function delEmpty($v){
	return $v!='';
}
$upFileName = array_filter($_FILES['file']['name'],'delEmpty');
//print_r($upFileName);

/*
 * �����ϴ�Ŀ¼
 * */
$dirName = 'upload/'.date('Y-m-d');
if(!is_dir($dirName)){
	mkdir($dirName);
}

$htmlStr = "<table border=1><tr><th>�ļ�����ͼ</th><th>�ļ���</th><th>�ļ���С</th><th>�ϴ�ʱ��</th><th>�鿴�ļ�</th><tr>";

//���ļ��ϴ�����
foreach($upFileName as $k=>$v){
	$newFilePath = $dirName.'/'.mt_rand(100,10000).$v;
//	echo $newFilePath."<br/>";
	if(is_uploaded_file($_FILES['file']['tmp_name'][$k])){
		if(!move_uploaded_file($_FILES['file']['tmp_name'][$k],$newFilePath)){
			echo "<script>alert('�ϴ��ļ�ʧ�ܣ�');</script>";
			exit;
		}
		$htmlStr.="<tr><td><img src='{$newFilePath}' width='30' /></td><td>".$v."</td><td>".$_FILES['file']['size'][$k]."</td><td>".date("Y��m��d��",filectime($newFilePath))."</td><td><a href='{$newFilePath}'>����鿴</a></td></tr>";
	}else{
		echo "<script>alert('�Ƿ��ļ���');</script>";
	}
}
$htmlStr.="</table>";
file_put_contents('upfile.html',$htmlStr);
echo "<h1>�ļ��ϴ��ɹ���<a href='upfile.html'>����鿴��ϸ</a></h1>";
































?>