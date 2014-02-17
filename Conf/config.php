<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'=>'Index,Admin',
	'DEFAULT_GROUP'=>'Index',

	'DB_HOST'=>'localhost',
	'DB_NAME'=>'thinkphp',
	'DB_USER'=>'root',
	'DB_PWD'=>'123456',
	'DB_PREFIX'=>'think_',


	//点语法配置
	'TMPL_VAR_IDENTIFY' => 'array',

	//定义模板文件的深度
	'TMPL_FILE_DEPR'=>'_',

	//默认过滤函数
	'DEFAULT_FILTER'=>'htmlspecialchars',

	//定义session类型 用数据库存储
	'SESSION_TYPE'=>'Db',
	//'SESSION_TYPE'=>'Redis',
	
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__' => __ROOT__.'/'.APP_NAME.'/Public' 
		)

);
?>