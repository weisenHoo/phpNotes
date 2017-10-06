<?php
header("Content-type: text/html; charset=utf-8");


/*
	函数
		一部分可重复执行的代码段，多次执行一次编译
		
	特点：
		1、减少程序运行的复杂性
		2、提高程序的可靠性
		3、提高软件的开发效率
		4、提高程序的维护性
		5、提高程序重复性
		
	语法：
		function 函数名(参数1,参数2){
			具体代码段……
			return 返回值;
		}
		函数名(参数1,参数2);

	函数可以在定义之前调用

*/

/*
function say_name($name){
	
	?>
	<h1 style="color: dodgerblue;">
		<?php
		echo $name."<br/>";	
		?>
	</h1>
	<?php
}
say_name("后盾网");
say_name("http://bbs.houdunwang.com");

$bbs_url = "http://bbs.houdunwang.com";
echo substr($bbs_url,7);
*/

function say_name($name,$age,$city='保密'){
	?>
	<table border="0" width="200">
		<tr>
			<td>你的名字：</td>
			<td><?php echo $name."<br/>";?></td>
		</tr>
		<tr>
			<td>你的年龄：</td>
			<td><?php echo $age."<br/>";?></td>
		</tr>
		<tr>
			<td>你的家乡：</td>
			<td><?php echo $city."<br/>";?></td>
		</tr>
	</table>
	<?php	
}

say_name("张奇",22);
say_name("张奇",22,"上海");

//var_dump(function_exists(ss));
if(function_exists(say_name)){
	say_name('刘凯','武汉',29);
}








































?>