<?php
/**
 * ����Զ�����...__autoload
*/
function __autoload($class_name)
{
	include_once $class_name.'.php';
}

/**
 * include ��require ����
*/
$start_time = microtime_float();
//$obj_main = new main();
$end_time = microtime_float();

//echo $end_time-$start_time;

function microtime_float()
{
	list($f1,$f2) =explode(' ',microtime());
	return floatval($f1)+floatval($f2);
}













