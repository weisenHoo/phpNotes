<?php
/*
 * filemtime ȡ���ļ��޸�ʱ��
 * filectime ȡ���ļ��������޸�ʱ��
 * fileatime ȡ���ļ����ϴη���ʱ��
 * date_default_timezone_set �趨����һ���ű�����������ʱ�亯����Ĭ��ʱ��
 * touch  �趨�ļ��ķ��ʺ��޸�ʱ��
 * 
 * */

touch('houdunwang.txt',mktime(8,55,33,5,22,2033));
 
date_default_timezone_set("PRC");
echo date('Y-m-d h:i:s',filemtime('houdunwang.txt'));
echo "<br/>";
echo date('Y-m-d h:i:s',filectime('houdunwang.txt'));
echo "<br/>";
echo date('Y-m-d h:i:s',fileatime('houdunwang.txt'));








































?>