<?php
return array (
			'DB_TYPE' => 'mysql',
			'DB_HOST' => '192.168.0.170',
			'DB_NAME' => 'dbsh',
			'DB_USER' => 'tqshq@com',
			'DB_PWD' => 'tqshq@#2017',
			'DB_PORT' => '',
			'DB_PREFIX' => 'shq_',
			'DB_FIELDS_CACHE' => true,
			'DB_CHARSET' => 'utf8',
			'DB_DEBUG' => false,
			'SYS_LOG' => true,
			'TMPL_ACTION_ERROR' => 'Public:error',
			'TMPL_ACTION_SUCCESS' => 'Public:success',
			'DB_RW_SEPARATE' => true, // ���ݿ��д�Ƿ���� ����ʽ��Ч
			'DB_DEPLOY_TYPE' => 1, // ���ݿⲿ��ʽ:0 ����ʽ(��һ������),1 �ֲ�ʽ(���ӷ�����)
				//'������'=>'����ֵ'
			'LAYOUT_PATH'=>'./apps/Admin/View/',
			'LAYOUT_ON'=>true,
			'LAYOUT_NAME'=>'layout',
			'SESSION_AUTO_START'    =>  true, 
			'TMPL_TEMPLATE_SUFFIX'  =>  '.php',     // Ĭ��ģ���ļ���׺
			'TMPL_DENY_PHP'         =>  false, // Ĭ��ģ�������Ƿ����PHPԭ������
			'HTML_CACHE_ON'     =>    true, // ������̬����
			'URL_MODEL'=>1,  
			'VAR_FILTERS'=>'htmlspecialchars,trim',
			'TMPL_PARSE_STRING' => array (
					'__PUBLIC__' => '/static',
					'__UPLOAD__' => RUNTIME_PATH.'Attach/',
					'__CATEGORY_ICON__' => RUNTIME_PATH.'Attach/CategoryIcon/',
					'__ATTACH_HOST__' => 'http://'. $_SERVER ['HTTP_HOST'].'/data/Attach/',
					'DEFAULT_LOGIN_IMAGE' => '/static/img/login.jpg',
					'DEFAULT_GOODS_IMAGE' => '/static/img/default_goods_image.gif',
					'DEFAULT_MEMBER_IMAGE' => '/static/img/default_user_image.png',
					'DEFAULT_LOGO_IMAGE' => '/static/img/logo.png' 
			),
			'ORDER_TIME' => 3600,
			'LANG_SWITCH_ON' => true,
			'LANG_AUTO_DETECT' => true,
			'LANG_LIST' => 'zh-cn',
			'VAR_LANGUAGE' => 'l',
			'DEFAULT_FILTER' => 'htmlspecialchars,trim',
			'AUTH_COOKIE_TIME' =>  30*24*3600,
			'USER_AUTH_ON' => true,
			'WAP_URL' => 'http://'. $_SERVER ['HTTP_HOST'].'/wap/',
			'NOT_AUTH_MODULE' => array (
					'index' => array (
							0 => 'index' 
					),
					'setting' => array (
							0 => 'clean_cache' 
					),
					'system' => array (
							0 => 'info' 
					)
			),
			'AUTOLOAD_NAMESPACE' => array(
					'plugins'     => PLUGIN_PATH,
			),
	);
	?>
