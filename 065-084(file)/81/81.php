<?php
/*
 * is_uploaded_file 
 * move_uploaded_file
 * 
 * �������(error)
 * 0��û���κδ���
 * 1���ļ���С������php.ini������
 * 2��������ǰ̨��ָ�����ļ���С
 * 3��ֻ�ϴ����ļ���һ����
 * 4��û���ϴ��κ��ļ�
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
				$errorMsg = "�ļ���С������php.ini������";
				break;
			case 2:
				$errorMsg = "������ǰ̨��ָ�����ļ���С";
				break;
			case 3:
				$errorMsg = "ֻ�ϴ����ļ���һ����";
				break;
			case 4:
				$errorMsg = "û���ϴ��κ��ļ�";
				break;
		}
		echo $errorMsg;
	}else{
		/*
		 * ���ϴ����ͽ����ж�
		 * */
		$type = array('.jpg','.png','.gif','.bmp');
		$upFileType = strtolower(strrchr($_FILES['upfile']['name'],'.'));
		if(!in_array($upFileType,$type)){
			echo "<script>alert('�ϴ����Ͳ��Ϸ�����ѡ��ͼƬ����');history.go(-1);</script>";
			exit;
		}

		/*
		 * �����ϴ��ļ�
		 * */
		$dirName = 'upload/'.date('Ymd');
		if(!is_dir($dirName)){			
			mkdir($dirName);
		}
		if(($_FILES['upfile']['tmp_name'])){
			$toFileName = $dirName.'/'.time().'_'.mt_rand(10,300).$_FILES['upfile']['name'];
			if(move_uploaded_file($_FILES['upfile']['tmp_name'],$toFileName)){
				echo "<script>alert('�ļ��ϴ��ɹ�');</script>";
			}else{
				echo "<script>alert('���� �ϴ�ʧ��');history.go(-1);</script>";
			}			
		}else{
			echo "<script>alert('���� �����ϴ��ļ�');history.go(-1);</script>";
		}
	}
}else{
	echo "<script>alert('��ѡ���ϴ��ļ�');history.go(-1);</script>";
}











































?>