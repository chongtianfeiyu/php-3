<?php
/**
 * const �����ؼ��� 
 * const ���γ�Ա����Ϊ������ֻ�����γ�Ա���ԡ�
 * 1������ʹ�ô�д,����ʹ��$
 * 2������������ʱ�͸���ʼֵ
 * 3�������ķ��ʷ�ʽ��static ������ͬ
*/
class Demo
{
	const AGE =10;
	public function __construct()
	{
		echo 'class -- demo';
	}
	/**
      * ���ڲ�����
    */
	public function get_age()
	{
		echo self::AGE;
	}
}
$demo_obj = new Demo();
echo $demo_obj->get_age();
echo Demo::AGE;
