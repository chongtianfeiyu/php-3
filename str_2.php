<?php
/**
 * �����о����ʵ��ַ��� - ������
*/
/**
 * 1���ַ��� 'www.baidu.com' ʵ���ַ�����ת
*/
$str ='www.baidu.com';
//str_rev($str);
//fun($str);
//�Զ��庯���ַ�����ת
/**
 * �Զ��庯��ʵ���ַ�����ת
*/
function str_rev($str)
{
	if($str)
	{
		$rev_str ='';
		for($i=1;$i<=strlen($str);$i++)
		{
				$rev_str .= substr($str,-$i,1);
		}
		echo $rev_str;
	}
}
/**
 * �Զ��庯��ʵ���ַ�����ת
*/
function fan($str)
{
	$num = strlen($str)-1;
	$new_str ='';	
	for($i=$num;$i >=0;$i--)
	{
		$new_str .=$str[$i];
	}
	echo $new_str;
}
/**
 * 2���ַ��� '123456789' дһ������ʵ�� 123,456,789  
*/
$n_str ='1234567891011';
//php �Դ����� 
//echo number_format($n_str,0,'',',');

num_format($n_str);

function num_format($n_str)
{
	$ln = strlen($n_str);
	$m = $ln % 3;
	$new_str;
	for($i=0;$i<$ln;$i++)
	{
		if($i>0 && $i % 3==$m)
		{
			$new_str .=',';	
		}
		$new_str .=$n_str[$i];
	}
	echo $new_str;
}
