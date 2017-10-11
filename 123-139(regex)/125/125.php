<?php



/*
 * 正则表达式_原子组
 * 
 * preg_match_all 执行一个全局正则表达式匹配
 * 
 *  PREG_PATTERN_ORDER
 * 	结果排序为$matches[0]保存完整模式的所有匹配, $matches[1] 保存第一个子组的所有匹配，以此类推。 
 *  
 * 	PREG_SET_ORDER
 * 	结果排序为$matches[0]包含第一次匹配得到的所有匹配(包含子组)， $matches[1]是包含第二次匹配到的所有匹配(包含子组)的数组，以此类推。 
 * 
 * 
 * preg_replace 执行一个正则表达式的搜索和替换
 * */


$houdunwang = <<<str
<html>
	<heard></heard>
	<body>
		<h1>后盾网PHP视频教程</h1>
		<h2>后盾网DREAMWEAVER CS5视频教程</h2>
		<h3>后盾网JAVACRIPT视频教程</h3>
		<h4>后盾网DIV+CSS视频教程</h4>
		<h5></h5>
		<h6></h6>
	</body>
</html>
str;

//echo $houdunwang;

//$preg = "/(<h1>|<h2>)(.*?)(<\/h1>|<\/h2>)/is";
//$preg = "/<(h1|h2)>(.*?)<\/(h1|h2)>/is";
$preg = "/<(h\d{1})>(.*?)<\/(\\1)>/is";
//$preg = '/<(h1|h2)>(.*?)<\/(\1)>/is';
//$preg = "/<(?'houdunwang'h1|h2)>(.*?)<\/(\k'houdunwang')>/is";

/*
preg_match_all($preg, $houdunwang, $arr, PREG_SET_ORDER);
var_dump($arr);
*/

/*
$str = preg_replace($preg, "<strong>\\2</strong>", $houdunwang);
echo $str;
*/

$str = preg_replace($preg, "<\\1>http://bbs.houdunwang.com<\\3>", $houdunwang);
echo $str;










?>