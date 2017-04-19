<?php
return array(
	//'配置项'=>'配置值'

	//下面是设置允许访问的模块和默认模块
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
	'DEFAULT_MODULE'       =>    'Home',  // 默认模块
	'DEFAULT_CONTROLLER'  =>     'Index',
	'DEFAULT_ACTION'       =>    'index',

	//下面设置路由
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(//定义路由规则
		'product/:id\d'    => 'product/index',
	),

	//配置默认的模板布局
	'LAYOUT_ON'   => true,
	'LAYOUT_NAME' => 'layout',
);