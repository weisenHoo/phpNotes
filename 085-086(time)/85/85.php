<?php
/*
 * ����ʱ��_ʱ��ʱ���time mktime strtotime����ʹ��
 * */
 
date_default_timezone_set('PRC');

//24��ʱ�� 1-23Сʱ

//UTC ͨ��Э��ʱ�� = ��������ʱ�� GMT = Ӣ���׶صı���ʱ�� 0ʱ��

//����ʱ�� ������ ����ʱ�����8Сʱ

//  PRC  ASia/chongqing  Asia/shanghai  Asia/urumqi  ������

/*
date_default_timezone_set('PRC');
echo date("Y-m-d H:i:s");
echo "<br/>";
echo date_default_timezone_get();
*/


//unixʱ���
//32 �����Ʊ�ʾ -2147483648 +2147483648  1901��X��X��  2038��
//1970��1��1��0ʱ0��0��  UNIX����Ԫ
//window  һ����LINUXϵͳ��  �޷���ʾ����ʱ�����1970��1��1��UNIX����Ԫ����㵽ָ��ʱ��������������


/*
//���ڼ��� UNIXʱ������ܲ���ϵͳ��Ӱ��
$t1 = strtotime("2008/6/9");
$t2 = strtotime("2017/6/9");
echo ($t2-$t1)/60/60/24/30/12;
*/


echo time();//��ǰʱ���ʱ���
echo "<br/>";
echo mktime(3,32,45,5,6,2017);
echo "<br/>";
echo date('Y-m-d h:i:s');
echo "<br/>";
echo gmmktime(3,32,45,5,6,2017);

echo "<br/>";
echo date('Y-m-d h:i:s',time());

echo "<br/>";
echo date('Y-m-d h:i:s',strtotime("+1 weeks"));






























?>