<?php
/*
 * ������ʽ_�ظ�ƥ��3 ��֤���� ��֤���� ��֤����
 * 
 * */

/*
//��ַ��֤
$str = "houdunwang.com.cn";
$preg = "/^[a-z]+\.(com|net|info|org|cc|([a-z]{2,3}(.[a-z]{2})*))$/is";

try{
	if(preg_match($preg, $str, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("error");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/

/*
//������֤
$str = "56789";
$preg = "/^\d{5,}$/is";
if(preg_match($preg, $str, $arr)){
	var_dump($arr);
}else{
	echo "����";
}
*/

/*
//�绰��֤
$str1 = "(010)64825057";
$str2 = "010-64825057";
$str3 = "64825057";
$str3 = "0570-12345678";

$preg = "/^(\([0-9]{3,4}\)|[0-9]{3,4}-)?[0-9]{8}$/is";
try{
	if(preg_match($preg, $str2, $arr)){
		var_dump($arr);
	}else{
		throw new Exception("error");
	}
}catch(Exception $e){
	echo $e->getMessage();
}
*/

/*
//�ֻ���֤
$str1 = "13318405879";
$str2 = "15900073225";
$str3 = "18689372061";
$str4 = "45214698721";

$preg = "/^1[3-8]{1}[0-9]{9}$/is";

preg_match($preg, $str3, $arr);
var_dump($arr);
*/

//�û���֤
$str = isset($_GET['name'])?$_GET['name']:'';
$preg = "/^[a-zA-Z]\w{5,17}$/is";
if(preg_match($preg, $str, $arr)){
	echo "<script>alert('ע��ɹ�');</script>";
	var_dump($arr);
}else{
	echo "<script>alert('�û�����ʽ����ȷ������������');</script>";
	echo "error";
}

?>
<form action="" method="get">
	�û�����<input type="text" name="name" /><br />
	<input type="submit" value="�ύ"/>
</form>
<?php


























?>