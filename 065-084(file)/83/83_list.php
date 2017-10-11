<?php

$mysqli = new mysqli('localhost','root','','file');
$sql = "SELECT * FROM upload";
$result = $mysqli->query($sql);
echo "<table border='1' width='500'>";
echo "<tr><th>文件ID</th><th>文件名</th><th>文件大小</th><th>文件路径</th></tr>";
while($row = $result->fetch_assoc()){
	echo "<tr align='center'><td>{$row['id']}</td><td>{$row['fname']}</td><td>{$row['fsize']}</td><td><a href='{$row['fpath']}'>点击查看</a></td></tr>";
}
echo "</table>";




























?>