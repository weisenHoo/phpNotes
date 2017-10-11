<?php
/*
 * 文件操作模式rwax rewind指针归位
 * 
 * */

 /*
$a = fopen('a.txt','r+');
fwrite($a,'123456789');
echo fread($a,filesize('a.txt'));
fclose($a);
*/
/*
$a = fopen('hdw.txt','w+');
fwrite($a,@$_GET['a']);
rewind($a);
echo fread($a,filesize('hdw.txt'));
fclose($a);


?>
<hr />
<form action="" method="get">
	<input type="text" name="a" id="a" value="请输入内容" /><br/>
	<input type="submit" value="发送"/>
</form>
<?php
*/

/*
$a = fopen('hdw.txt','a+');
fwrite($a,@$_GET['a']);
rewind($a);
echo fread($a,filesize('hdw.txt'));
fclose($a);


?>
<hr />
<form action="" method="get">
	<input type="text" name="a" id="a" value="" /><br/>
	<input type="submit" value="发送"/>
</form>
<?php
*/

/*
$a = @fopen('a.txt','x') or die("文件存在");
echo $a;
*/

/*
$baidu = fopen('http://www.7senven.cn','r');
while( $row = fgets($baidu)){
	echo $row;
}
*/

$png = fopen('jpg.png','rb');
header("Content-type:image/png");
echo fread($png,filesize('jpg.png'));
























?>