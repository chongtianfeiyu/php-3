<?php
/**
 * Gearman  �Ĺ���ԭ���ʹ��
*/
$client = new GearmanClient();

$client->addServer('192.168.8.180','4730');
echo $client->do('client_func','hello,word').'\n';
