<?php
session_start();
//SID Ԥ���峣�� windows ��ʹ�á�
/**
 * ���ͻ��˽��� cookie ʹ,
 ��linux ��Unix��ʹ������ķ���:
 1������php.ini�е�session.use_trans_sid = 1���߱���ʱ�򿪴���--enable-trans-sidѡ���PHP�Զ���ҳ����session id��
 2���ֶ�ͨ��URL��ֵ�����ر�����session id��
 3�����ļ������ݿ����ʽ����session_id,�ڿ�ҳ�������ֶ����á�
*/
/**
 * session ���ù���ʱ�� ��php.ini ������
 * ������PHP��,����php.ini,�ҵ� session.gc_maxlifetime = 1440 #(PHP5Ĭ��24����)
 -------------------session �Ĺ���ʱ��------------------------
 session.gc_probability = 1 
 session.gc_divisor = 1000
 //garbage collection �и����ʵģ�1/1000����session 1000�β���һ�α����ա�
 //php.ini�ļ��е� gc_maxlifetime �����Ϳ����ӳ�session�Ĺ���ʱ����
*/
$s_name = session_name();
if(empty($_SESSION['username']) || empty($_COOKIE[$s_name]))
{
	echo '��Ҫ���µ�½';
	$u ='admin';
	$tmp_pwd ='admin';
	$username = !empty($_REQUEST['username']) ? $_REQUEST['username'] : '';
	$pwd = !empty($_REQUEST['pwd']) ? $_REQUEST['pwd'] : '';
	//var_dump($username,$pwd);exit;
	$is_set = !empty($_REQUEST['is_set']) ? $_REQUEST['is_set'] : 0;
	if($username ==$u && $pwd ==$tmp_pwd)
	{
		//$lifetime =10;
		//setcookie(session_name(),session_id(),time()+10,"/");
		if(SID=='')
		{
			echo 'sid ---------set cookie';
			setcookie(session_name(),session_id(),time()+10,"/");
		}else{
			echo 'sid --------set session';
			$lifetime=10;//����1����
			session_set_cookie_params($lifetime);
			session_regenerate_id(true);
		}
		//print_r(session_get_cookie_params());
		$_SESSION['username'] = $username;
		$_SESSION['pwd'] = $pwd;
		//var_dump($_REQUEST);
		//echo '';
	}
}else{
	echo '��½�ɹ�';exit;
}
?>
<!DOCTYPE html> 
<html>
<head>
<!--STATUS OK-->
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>-----------</title>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
</head>
<body>
<script type="text/javascript">

</script>
<form action="session.php" method="post">
 username:<input type="text" name="username" value=''/><br/>
 password:<input type="password" name="pwd" value='' /></br/>
 �´��Զ���½:<input type="checkbox" name="is_set" value="1"/><br/>
 �ύ:<input type="submit" name="login" value="�ύ"/>---<input type="reset" name="reset" value="����"/>
</form>
</body>
</html>