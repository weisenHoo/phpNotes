<?php
/*
 * is_dir �ж��Ƿ�Ϊһ��Ŀ¼
 * mkdir ����Ŀ¼����һ������ָ��Ŀ¼�����ڶ������� Ŀ¼Ȩ�ޣ�����������ΪTRUE��ݹ鴴��
 * getcwd ��õ�ǰ����Ŀ¼
 * chdir ���ĵ�ǰ����Ŀ¼
 * rmdir ɾ��Ŀ¼
 * 
 * */

//var_dump(is_dir('../65'));

//mkdir('./template/default/image/1/2/3/4/5',0777,true);
//$dir = array("images","html","cache","js");
//array_map(mkdir, $dir);
/*
$dirName = 'uploads/'.date("Y-m-d",time());
if(!file_exists($dirName)){
	mkdir($dirName);
}
*/

/*
echo getcwd();
chdir('../65');
$webArr = include "b.php";
echo "<pre>";
print_r($webArr);
sleep(10);
mkdir('ccccccccc');
*/

if(file_exists('../65/upload/mp3')){
	rmdir('../65/upload/mp3');
	echo "<script>alert('Ŀ¼ɾ���ɹ�')</script>";
}







































?>