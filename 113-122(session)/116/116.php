<?php
/*
 * SESSION��ͬ�Ĵ��ͷ�ʽ 
 * ��ַ������ 
 * �ļ����� 
 * �Զ����� 
 * ���PHP.INI������
 * 
 * */


/*
session_start();
echo session_id();
$_SESSION['webname'] = "�������̳";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";

?>
<a target="_blank" href="116_1.php?sessionid=<?php echo session_id(); ?>">116_1.php</a><br />
<a target="_blank" href="116_2.php?sessionid=<?php echo session_id(); ?>">116_2.php</a><br />
<a target="_blank" href="116_3.php?sessionid=<?php echo session_id(); ?>">116_3.php</a><br />

<form action="116_4.php" method="post">
	<input type="hidden" name="sid" value="<?php echo session_id(); ?>" /><br />
	�û�����<input type="text" name="uname" /><br />
	<input type="submit" value="�ύ" />
</form>
<?php
*/

/*
session_start();

isset($_COOKIE[session_name()])?define('s_id', ''):define('s_id', session_id());
$sid = isset($_COOKIE[session_name()])?'':"?sid=".s_id;

$_SESSION['webname'] = "�������̳";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";

?>
<a target="_blank" href="116_1.php<?php echo $sid; ?>">116_1.php</a><br />
<a target="_blank" href="116_2.php<?php echo $sid; ?>">116_2.php</a><br />
<a target="_blank" href="116_3.php<?php echo $sid; ?>">116_3.php</a><br />
<?php
*/


session_start();

$sid = isset($_COOKIE[session_name()])?'':"?".session_name()."=".session_id();
define("HDW", $sid);

$_SESSION['webname'] = "�������̳";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";

?>
<!--<a target="_blank" href="116_1.php?<?php echo session_name(); ?>=<?php echo session_id(); ?>">116_1.php</a><br />-->
<a target="_blank" href="116_2.php<?php echo HDW; ?>">116_2.php</a><br />
<a target="_blank" href="116_3.php?<?php echo session_name(); ?>=<?php echo session_id(); ?>">116_3.php</a><br />
<?php
































?>