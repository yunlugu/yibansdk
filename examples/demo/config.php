<?php
	/**
	 * ����ʹ�� վ��Ӧ�� �� ��վ���� ��ʽ����
	 * ��Ӧ�� AppID �� AppSecret ���Ե�¼�װ࿪��ƽ̨��http://open.yiban.cn��
	 * �� �������� ��ȡ�ã�������Բ鿴 https://open.yiban.cn/wiki/index.php?page=%E6%96%B0%E6%89%8B%E5%BC%95%E5%AF%BC
	 *
	 * վ��Ӧ������Ӧ�ý��뷽ʽһ��
	 *
	 * AppID �� AppSecret ���� 32λ�ַ���
	 */

	$cfg = array(
		/* վ��Ӧ�ã�����Ӧ�ã������� */
		'x' => array(
			'appID'		=> 'd8cd1211841b1a7907777b0d9649c27f',
			'appSecret'	=> '026ae82656cb5a32c997cfb9015bf799',
			'callback'	=> 'http://f.yiban.cn/webapptest'		// վ��Ӧ������� callback �ǹ��������￴���ġ�վ�ڵ�ַ��
		),
		/* ��վ��������� */
		'm' => array(
			'appID'		=> '1cad453c00a9d4bb',
			'appSecret'	=> '44f24e60d52a3b4fd9a41bc597147bfd',
			'callback'	=> 'http://localhost/yibansdk/examples/demo/authorize.php'
		)
	);

?>
