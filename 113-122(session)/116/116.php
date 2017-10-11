<?php
/*
 * SESSION不同的传送方式 
 * 地址栏传递 
 * 文件传递 
 * 自动传递 
 * 相关PHP.INI配置项
 * 
 * */


/*
session_start();
echo session_id();
$_SESSION['webname'] = "后盾网论坛";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";

?>
<a target="_blank" href="116_1.php?sessionid=<?php echo session_id(); ?>">116_1.php</a><br />
<a target="_blank" href="116_2.php?sessionid=<?php echo session_id(); ?>">116_2.php</a><br />
<a target="_blank" href="116_3.php?sessionid=<?php echo session_id(); ?>">116_3.php</a><br />

<form action="116_4.php" method="post">
	<input type="hidden" name="sid" value="<?php echo session_id(); ?>" /><br />
	用户名：<input type="text" name="uname" /><br />
	<input type="submit" value="提交" />
</form>
<?php
*/

/*
session_start();

isset($_COOKIE[session_name()])?define('s_id', ''):define('s_id', session_id());
$sid = isset($_COOKIE[session_name()])?'':"?sid=".s_id;

$_SESSION['webname'] = "后盾网论坛";
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

$_SESSION['webname'] = "后盾网论坛";
$_SESSION['weburl'] = "http://bbs.houdunwang.com";

?>
<!--<a target="_blank" href="116_1.php?<?php echo session_name(); ?>=<?php echo session_id(); ?>">116_1.php</a><br />-->
<a target="_blank" href="116_2.php<?php echo HDW; ?>">116_2.php</a><br />
<a target="_blank" href="116_3.php?<?php echo session_name(); ?>=<?php echo session_id(); ?>">116_3.php</a><br />
<?php
































?>