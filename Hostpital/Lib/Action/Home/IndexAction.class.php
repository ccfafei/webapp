<?php
class IndexAction extends Action{
	public $info=array();
	//挂号首页
	public function index(){
		$this->display();
	}
	
	//处理挂号
	public function checkPost(){
		//断断是否提交
		
		if(IS_POST){
			$username	=	var_format($_POST['username']);
			$age		=	intval(var_format($_POST['age']));
			$sex		=	var_format($_POST['sex']);
			$tel		=	var_format($_POST['tel']);
			$ks			=	var_format($_POST['ks']);
			$cont		=	var_format($_POST['cont'])==null?'不详':var_format($_POST['cont']);
			$yul		=	($_POST['yul'])==""?strtotime(date("Y-m-d H:i:s")):strtotime($_POST['yul']);
			$hostid		=	$_POST['hostid'];
			if(empty($hostid)){$this->error('你挂号的医院名称设置错误!');}
			//插入数据库
			$data		=	array('username'=>$username,'age'=>$age,'sex'=>$sex,'tel'=>$tel,'ks'=>$ks,'cont'=>$cont,'yul'=>$yul,'hostid'=>$hostid);
			//P($data);
			$Dao		=	M('meet');
			$result		=	$Dao->data($data)->add();
			if($result){
				$this->success('挂号成功',U('Home/Index/meet',array('num'=>$result)),'2');
				
			}	
			else{
				$this->error("挂号失败","","2");
			}
		}
	}	
	//显示挂号
	public function meet(){
		$num		=	I('num');
		$this->num	=	$num;
		$this->list	=	M('meet')->order('id')->where(array('id'=>$num))->select();
		$this->display();
	}
}
?>