<?php
/**
 * register_tick_function  ע���Ǻ���   register_shutdown_function �ر�ע�ắ�� unregister_tick_function ɾ�����
*/
//----------λ��----------
//register_tick_function('get_str',true);
//register_shutdown_function('get_str');

/**
 * 
*/
//---------------
register_tick_function('get_str',true);
//register_shutdown_function('get_str');
//unregister_tick_function('get_str');
declare(ticks=2);

echo '############<br/>';

//***���������λ��,����
function get_str()
{
	print 'str';
}
//����--------------
















/*
set_time_limit(0);
    
function profiler($return = false)
{
	static $m = 0;
	if($return) return $m . " bytes";
	if(($mem = memory_get_usage()) > $m) $m = $mem;
}

register_tick_function('profiler');
declare(ticks = 1);

$numbers = array();
for($i=0; $i<100; $i++)
{
	print($i . "<br />");
}

print(profiler(true));
*/













