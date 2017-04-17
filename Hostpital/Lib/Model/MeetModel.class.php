<?php
class MeetModel extends RelationModel{
	protected $trueTableName = 'ts_meet';   //这里声明基本表（主表）
	

		protected  $_link=array(
				'Hosts'=>array(
					'mapping_type'    =>BELONGS_TO,
					'class_name'      =>'Hostinfo',
					'foreign_key'	  =>'hostid'
					
						)
				
			
		);
	}