<?php
	/**
	 * ��վ����ʹ��Auth��֤�ӿڽ�����Ȩ
	 * ��Ȩ������ͨ��������ض�����Ȩ������ȡ����Ȩ�루code����
	 * �ٴӷ�����ʹ�ýӿڵ��û�ȡ����Ӧ�û��ķ�������
	 *
	 */


	/**
	 * ����SDK
	 */
	require("../../classes/yb-globals.inc.php");
	
	session_start();

	/**
	 * �����ļ�
	 */
	include('config.php');
	
	/**
	 * ��Ȩ��֤��ҪAppID��AppSecret�ͻص���ַ��
	 *
	 */
	$api = YBOpenApi::getInstance()->init($cfg['m']['appID'], $cfg['m']['appSecret'], $cfg['m']['callback']);
	//var_dump($cfg);
	//exit;
	$au  = $api->getAuthorize();
	
	/**
	 * ��������ʹ�� session�����ѻ�ȡ���ķ�������
	 */
	$token	= isset($_SESSION['__TOKEN__']) ? $_SESSION['__TOKEN__'] : false;

	if (empty($token))		// δ��ȡ��Ȩ
	{
		/**
		 * ����Ȩ�������ص�����ʱ��URL�д���code����Ȩ�룩����
		 *
		 */
		if (isset($_GET['code']) && !empty($_GET['code']))
		{
			/**
			 * ʹ����Ȩ�루code����ȡ��������
			 * ����ȡ�ɹ������� $info['access_token']
			 * ����鿴��Ӧ�� msgCN �鿴������Ϣ
			 */
			$info = $au->querytoken($_GET['code']);
			if (isset($info['access_token']))
			{
				$_SESSION['__TOKEN__']	= $info['access_token'];
				echo 'SUCCESS';
			}
			else
			{
				echo $info['msgCN'];
			}
			var_dump($_SESSION);
		}
		else	// �ض�����Ȩ������������ʹ��header()�ض��򣬿���ʹ������������
		{
			header('location: ' . $au->forwardurl());
		}
	}
	else
	{
		echo 'AUTHORIED';
		session_destroy();
	}
?>
