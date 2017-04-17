<?php 
	class UserModel extends RelationModel{
		//定义主表的名称
		//protected $tableName = 'user';
		
		//定义关联
		protected $_link = array(
				'Role'=>array(
						'mapping_type'=>MANY_TO_MANY,
						'class_name'=>'Role',
						'mapping_name'=>'Roles',
						'foreign_key'=>'user_id',
						'relation_foreign_key'=>'role_id',
						'relation_table'=>'ts_role_user'
				),
		);
		
	}
?>