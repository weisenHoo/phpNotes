<?php
header("Content-type: text/html; charset=utf-8");

/*
	循环结构:
		while(){
			
		}
		
		
		$houdunwang = 1;
		while($houdunwang<100){
			echo $houdunwang++."<br/>";
		}
*/

$mysqli = new mysqli('localhost','root','','edu');
/*
$i = 1;
while($i<=100){
	$sql = "insert into user (uname,age) values('hdw{$i}',$i)";
	$mysqli->query($sql);
	$i++;
}
*/

/*
$sql = "select * from user ORDER BY age ASC";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
	echo "学员名：".$row['uname']."年龄:".$row['age']."<br/>";
}
*/

$i = 1;
while($i<=9){
	$j = 1;
	while($j<=$i){
	
		echo $i.'x'.$j.'='.$i*$j."\t";
		$j++;	
			
	}
	echo '<br/>';
	$i++;
}























?>