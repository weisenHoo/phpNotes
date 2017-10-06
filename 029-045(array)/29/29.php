<?php
header("Content-type: text/html; charset=utf-8");

/*
	数组：在一个变量中，存储一个获多个值，每一个元素都有一个访问ID 
*/

echo "<pre>";

$arr0 = array("李海","PHP视频课程","29","1982-05-08");
print_r($arr0);

$arr1 = array(
	"name"=>"李海",
	"type"=>"PHP视频课程",
	"age"=>"29",
	"year"=>"1982-05-08"
);
print_r($arr1);

$arr2 = array(
	array(
		"name"=>"李海",
		"type"=>"PHP视频课程",
		"age"=>"29",
		"year"=>"1982-05-08"
	),
	array(
		"name"=>"李海",
		"type"=>"PHP视频课程",
		"age"=>"29",
		"year"=>"1982-05-08"
	)	
);
print_r($arr2);

$arr3[0] = "李海";
$arr3[1] = "PHP视频课程";
$arr3[2] = "29";
$arr3[3] = "1982-05-08";
print_r($arr3);

$arr4[] = "李海";
$arr4[] = "PHP视频课程";
$arr4[] = "29";
$arr4[] = "1982-05-08";
print_r($arr4);

$arr5["name"] = "李海";
$arr5["type"] = "PHP视频课程";
$arr5["age"] = "29";
$arr5["year"] = "1982-05-08";
print_r($arr5);

$arr6["PHP"] = array();
$arr6["PHP"][] = "李海";
$arr6["PHP"][] = "PHP视频课程";
$arr6["PHP"][] = "29";
$arr6["PHP"][] = "1982-05-08";
$arr6["DIV"] = array();
$arr6["DIV"][] = "李海";
$arr6["DIV"][] = "PHP视频课程";
$arr6["DIV"][] = "29";
$arr6["DIV"][] = "1982-05-08";
print_r($arr6);

foreach($arr5 as $key=>$value){
	if($key=="age"){
		echo '<span>'.$key.'=</span><span style="color: #f00;">'.$value.'</span><br/>';
	}else{
		echo '<span>'.$key.'=</span><span>'.$value.'</span><br/>';
	}
	
}

$db = new mysqli('localhost','root','','edu') or die('链接错误');
$db->query("SET NAMES UTF8");
$sql = "select * from user";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){
	echo "学员名".$row['uname']."&nbsp;&nbsp;课程名".$row['cname']."<br/>";
}





































?>