<?php
/*
 * is_uploaded_file 
 * move_uploaded_file
 * 
 * 错误代码(error)
 * 0：没有任何错误
 * 1：文件大小超过了php.ini的配置
 * 2：超过了前台表单指定的文件大小
 * 3：只上传了文件的一部分
 * 4：没有上传任何文件
 * 
 * */

/*
echo "<pre>";
print_r($_FILES);
*/

if(!empty($_FILES['upfile']['name'])){
	if($_FILES['upfile']['error']>0){
		switch($_FILES['upfile']['error']){
			case 1:
				$errorMsg = "文件大小超过了php.ini的配置";
				break;
			case 2:
				$errorMsg = "超过了前台表单指定的文件大小";
				break;
			case 3:
				$errorMsg = "只上传了文件的一部分";
				break;
			case 4:
				$errorMsg = "没有上传任何文件";
				break;
		}
		echo $errorMsg;
	}else{
		/*
		 * 对上传类型进行判断
		 * */
		$type = array('.jpg','.png','.gif','.bmp');
		$upFileType = strtolower(strrchr($_FILES['upfile']['name'],'.'));
		if(!in_array($upFileType,$type)){
			echo "<script>alert('上传类型不合法，请选择图片类型');history.go(-1);</script>";
			exit;
		}

		/*
		 * 处理上传文件
		 * */
		$dirName = 'upload/'.date('Ymd');
		if(!is_dir($dirName)){			
			mkdir($dirName);
		}
		if(($_FILES['upfile']['tmp_name'])){
			$toFileName = $dirName.'/'.time().'_'.mt_rand(10,300).$_FILES['upfile']['name'];
			if(move_uploaded_file($_FILES['upfile']['tmp_name'],$toFileName)){
				echo "<script>alert('文件上传成功');</script>";
			}else{
				echo "<script>alert('错误！ 上传失败');history.go(-1);</script>";
			}			
		}else{
			echo "<script>alert('错误！ 不是上传文件');history.go(-1);</script>";
		}
	}
}else{
	echo "<script>alert('请选择上传文件');history.go(-1);</script>";
}











































?>