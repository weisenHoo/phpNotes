<?php
/*
 * PHP����COOKIE������Ӱ��COOKIE���ݷ�ʽ
 * 
 * ob_start ��������ƻ���
 * setcookie ���� Cookie
 * 
 * 	setcookie(name,value,expire,path,domain,secure,httponly);
 * 		name: Cookie ���� * 			
 * 		value: Cookie ֵ(time()+value)
 * 			���ֵ�������û��ĵ�������𴢴�������Ϣ�� 
 * 			���� name �� 'cookiename'�� ��ͨ�� $_COOKIE['cookiename'] ��ȡ����ֵ��
 * 			 
 * 		expire: Cookie �Ĺ���ʱ��
 * 			���Ǹ� Unix ʱ������� Unix ��Ԫ��������������ʱ�� 1970 �� 1 �� 1 �� 00:00:00���������� Ҳ����˵������������ time() �����Ľ������ϣ�����ڵ������� 
 * 			����Ҳ������ mktime()�� time()+60*60*24*30 �������� Cookie 30 �����ڡ� ������ó��㣬���ߺ��Բ����� Cookie ���ڻỰ����ʱ���ڣ�Ҳ���ǹص������ʱ����
 * 
 * 		path: Cookie ��Ч�ķ�����·��
 * 			���ó� '/' ʱ��Cookie ���������� domain ��Ч�� 
 * 			������ó� '/foo/'�� Cookie ������ domain �� /foo/ Ŀ¼������Ŀ¼��Ч������ /foo/bar/���� Ĭ��ֵ������ Cookie ʱ�ĵ�ǰĿ¼
 * 
 * 		domain: Cookie ����Ч����/������
 * 			���ó������������� 'www.example.com'������ʹ Cookie ���������������������������Ч������ w2.www.example.com���� 
 * 			Ҫ�� Cookie ������������Ч����������ȫ������������ֻҪ���ó������Ϳ����ˣ������������ 'example.com'����
 * 
 * 		secure: ������� Cookie �Ƿ����ͨ����ȫ�� HTTPS ���Ӵ����ͻ���
 * 			���ó� TRUE ʱ��ֻ�а�ȫ���Ӵ���ʱ�Ż����� Cookie�� 
 * 			������ڷ������˴���������󣬳���Ա��Ҫ�����ڰ�ȫ�����Ϸ��ʹ��� Cookie ��ͨ�� $_SERVER["HTTPS"] �жϣ���
 * 
 * 		httponly: ���ó� TRUE��Cookie ����ͨ�� HTTP Э�����
 *  		����˼���� Cookie �޷�ͨ������ JavaScript �����Ľű����Է��ʡ� 
 * 			Ҫ��Ч���� XSS ����ʱ�������ȡ��Ϊ���ɽ����ô����ã���Ȼ���������������֧�֣����������˵�����������顣 PHP 5.2.0 ����ӡ� TRUE �� FALSE
 * 
 * 
 * */

 /*
echo $_COOKIE['web'];
setcookie("web","bbs.houdunwnag.com",time()+20);
*/

/*
ob_start();
for($i=0;$i<20;$i++){
	echo str_pad("  ", 8844);
	echo $i;
	sleep(1);
}
*/



setcookie("myname","ΰɭ");
echo $_COOKIE['myname'];



































?>