<?php

$mysqli = new mysqli('localhost','root','','file');
$sql = "SELECT * FROM upload";
$result = $mysqli->query($sql);
echo "<table border='1' width='500'>";
echo "<tr><th>�ļ�ID</th><th>�ļ���</th><th>�ļ���С</th><th>�ļ�·��</th></tr>";
while($row = $result->fetch_assoc()){
	echo "<tr align='center'><td>{$row['id']}</td><td>{$row['fname']}</td><td>{$row['fsize']}</td><td><a href='{$row['fpath']}'>����鿴</a></td></tr>";
}
echo "</table>";




























?>