<?php
/*
 * 多个文件上传处理
 * 
 * */

/*
echo "<pre>";
print_r($_FILES);
*/

/*
 * 过滤清空数据
 * */
function delEmpty($v){
	return $v!='';
}
$upFileName = array_filter($_FILES['file']['name'],'delEmpty');
//print_r($upFileName);

/*
 * 配置上传目录
 * */
$dirName = 'upload/'.date('Y-m-d');
if(!is_dir($dirName)){
	mkdir($dirName);
}

$htmlStr = "<table border=1><tr><th>文件缩略图</th><th>文件名</th><th>文件大小</th><th>上传时间</th><th>查看文件</th><tr>";

//多文件上传处理
foreach($upFileName as $k=>$v){
	$newFilePath = $dirName.'/'.mt_rand(100,10000).$v;
//	echo $newFilePath."<br/>";
	if(is_uploaded_file($_FILES['file']['tmp_name'][$k])){
		if(!move_uploaded_file($_FILES['file']['tmp_name'][$k],$newFilePath)){
			echo "<script>alert('上传文件失败！');</script>";
			exit;
		}
		$htmlStr.="<tr><td><img src='{$newFilePath}' width='30' /></td><td>".$v."</td><td>".$_FILES['file']['size'][$k]."</td><td>".date("Y年m月d日",filectime($newFilePath))."</td><td><a href='{$newFilePath}'>点击查看</a></td></tr>";
	}else{
		echo "<script>alert('非法文件！');</script>";
	}
}
$htmlStr.="</table>";
file_put_contents('upfile.html',$htmlStr);
echo "<h1>文件上传成功！<a href='upfile.html'>点击查看详细</a></h1>";
































?>