<?php
/*
 * �ļ�����ģʽrwax rewindָ���λ
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
	<input type="text" name="a" id="a" value="����������" /><br/>
	<input type="submit" value="����"/>
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
	<input type="submit" value="����"/>
</form>
<?php
*/

/*
$a = @fopen('a.txt','x') or die("�ļ�����");
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