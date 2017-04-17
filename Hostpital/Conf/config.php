<?php
if(!defined('THINK_PATH'))exit();
return array(
	//'配置项'=>'配置值'
	
	//项目分组配置
	'APP_GROUP_LIST'=>'Home,Admin',
    'DEFAULT_GROUP'=>'Admin',
	 'TMPL_FILE_DEPR'=>'_',
	//url Rewrite模式
	'URL_MODEL'=>2,

     /* 数据库设置 */
    'DB_TYPE'               => 'mysql',         // 数据库类型
    'DB_HOST'               => 'localhost',     // 服务器地址
    'DB_NAME'               => 'hostpital',     // 数据库名
    'DB_USER'               => 'root',          // 用户名
    'DB_PWD'                => '123456',       // 密码
    'DB_PORT'               => '3306',          // 端口
    'DB_PREFIX'             => 'ts_',           // 数据库表前缀
	'SHOW_PAGE_TRACE'       =>false, 				// 显示页面Trace信息
	'TMPL_L_DELIM'          =>'<{',
    'TMPL_R_DELIM'          =>'}>',
		
	/*配置RABC*/
	
	'USER_AUTH_ON'          =>        true,              			//开启认证
	'USER_AUTH_TYPE'        =>        1,                 			//用户认证使用SESSION标记
	'USER_AUTH_KEY'         =>        'uid',         			//设置认证SESSION的标记名称
	'RBAC_SUPERADMIN'		=>		  'admin',						//超级管理员名称
	'USER_AUTH_MODEL'		=>		  'User',
	'ADMIN_AUTH_KEY'        =>        'admin',        	 	   		//超级管理员用户识别
	'NOT_AUTH_MODULE'       =>        'Login',    	       		//默认不需要认证的模块'A,B,C'
	'NOT_AUTH_ACTION'       =>        'top,left,index,mainfra,pubCheck,checkName,mypassword,Adsearch,addNodehandle,accessHandle',  	//默认不需要认证的动作
	'REQUIRE_AUTH_MODULE'    =>        '',              			//默认需要认证的模块
	'REQUIRE_AUTH_ACTION'    =>        '',              			//默认需要认证的动作
	'USER_AUTH_GATEWAY'     =>     	  'Login/loginchk',				//默认的认证网关
	'RBAC_ROLE_TABLE'       =>        'ts_role',        			//角色表
	'RBAC_USER_TABLE'       =>        'ts_role_user',   			//角色分配表
	'RBAC_ACCESS_TABLE'     =>        'ts_access',      			//权限分配表
	'RBAC_NODE_TABLE'       =>        'ts_node',        			//节点表
	
	
	
				
);
?>