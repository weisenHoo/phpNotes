<?php
header("Content-type: text/html; charset=utf-8");

/*
	字符串处理函数：
		PHP处理字符串的空格
			strlen	字符串长度
			trim	对字符串左右空格删除 
			ltrim	对字符串左部空格删除 
			rtrim	对字符串右侧空格删除 
			
			$houdunwang = "     bbs.houdunwang.com      ";
			echo strlen($houdunwang);
			echo "<br/>";
			echo strlen(trim($houdunwang));
			echo "<br/>";
			echo strlen(ltrim($houdunwang));
			echo "<br/>";
			echo strlen(rtrim($houdunwang));
		
		
		对字符串大小写的处理
			strtolower	将字符串转换成小写
			strtoupper	将字符串转换成大写
			ucfirst		首字母大写
			ucwords		单词首字母大写
			
			$bbs = "bbs.HOUDUNWANG.COM";
			$word = "hello word";
			
			echo $bbs;
			echo "<br/>";
			echo strtolower($bbs);
			echo "<br/>";
			echo strtoupper($bbs);
			echo "<br/>";
			echo ucfirst($word);
			echo "<br/>";
			echo ucwords($word);
			echo "<br/>";
			
			
		字符串填充函数
			str_pad("字符串",长度,"填充的内容",填充的方向);
			填充的方向：	STR_PAD_BOTH	左右两侧进行填充，如果填充为奇数，右侧多填
						STR_PADLEFT		左侧填充
						STR_PAD_RIGHT	右侧填充
						
						$url = "houdunwnag";
						
						echo $url;
						echo "<br/>";
						echo strlen($url);
						echo "<hr/>";
						
						$newUrl = str_pad($url,20,"+");
						echo $newUrl;
						echo "<br/>";
						echo strlen($newUrl);
						echo "<hr/>";
						
						$newUrlBoth = str_pad($url,20,"+",STR_PAD_BOTH);
						echo $newUrlBoth;
						echo "<br/>";
						echo strlen($newUrlBoth);
						echo "<hr/>";
						
						$newUrlLeft = str_pad($url,14,"www.",STR_PAD_LEFT);
						echo $newUrlLeft;
						echo "<br/>";
						echo strlen($newUrlLeft);
						echo "<hr/>";
						
						$newUrlRight = str_pad($newUrlLeft,18,".com",STR_PAD_RIGHT);
						echo $newUrlRight;
						echo "<br/>";
						echo strlen($newUrlRight);
						echo "<hr/>";	
						
		
		字符串翻转函数
			strrev
			
			//$edu = "study";
			$edu = "后盾网";
			echo strrev($edu);			
			
			
		md5加密函数
			md5();
			
			$pwd = "houdunwang";
			//echo md5($pwd);
			if(md5(@$_GET["pwd"])=="bf320fa3295cf4770c58db4db5a8ef04"){
				echo "密码正确，登录成功！";
			}else{
				echo "密码错误，请重新输入！";
			?>
			<form action="" method="get">
				<input type="text" name="uname" /><br />
				<input type="password" name="pwd" /><br />
				<input type="submit" value=" 用户登录"/>
			</form>
			<?php
			}		
			
			
		格式化金额字符串函数
			number_format("字符串",小数位数,小数点,千位分隔符);	
			
			$number1 = "152852";
			echo number_format($number1,'3','|','+');	
			
			
		字符串拆分成数组
			explode("用于在哪个字符串进行拆分","拆分的字符串","返回数组元素的数目");
			
			$str1 = "后盾网论坛,免费视频分享平台,网址是：bbs.houdunwang.com";
			echo $str1;
			echo "<br/>";
			$arr = explode(',',$str1,2);
			foreach($arr as $key=>$value){
				echo $key."=".$value."<br/>";
			}			
			
		
		把数组元素合成字符串
			implode("链接字符串","数组");
				
*/

$arr = array("后盾网","新浪网","百度网");
print_r($arr);
echo "<br/>";
$str = implode(",",$arr);
var_dump($str);






































?>