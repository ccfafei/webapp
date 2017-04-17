<?php
	class RbacAction extends  CommonAction{
		
		//添加角色
		public function addRole(){
			$this->display();
		}
		
		//处理添加角色
		public function addRoleHandle(){			
				$Dao		=		M('Role');
				if($Dao->add($_POST)){
					$this->success("添加成功",U('Admin/Rbac/showRole'));
				}
				else{
					$this->error("添加失败");
				}
			
		}
		
		//显示用户角色列表
		public function showRole(){
				$Dao			=		M('Role');
				$this->list		=		$Dao->select();
				
				$this->display();
		}
		
		//添加节点
		
		public function addNode(){
				$Dao			=		M('Node');

				$node			=		$Dao->field('id,name,pid,title')->select();	
				$app			=		Node_merge($node);
				$this->list		=		$app;
				$this->display();
				
		}
		
		//处理添加节点
		public function addNodehandle(){
				$Dao		=		M('Node');
				if($Dao->add($_POST)){
					$this->success("添加成功",U('Admin/Rbac/addNode'));
				}
				else{
					$this->error("添加失败");
				}
					
				
		}
		//添加操作
		public function addApp(){
				
				$this->pid			=		I('pid',0,'Intval');
				$this->level		=		I('level',1,'Intval');
				switch ($this->level){
					case 1 :
						$this->type		=		"应用";
						break;
					case 2 :
						$this->type 	=		"控制器";
						break;
					case 3 :
						$this->type		=		"方法";
				}
				$this->display();
		}
		//显示节点信息表
		public function showNode(){
				$Dao			=		M('Node');
				$this->app		=		$Dao->order('sort')->select();
				$this->display();
		}
		
		//显示并修改节点权限
		public function modifyAcess(){
				header("Content-Type='text/html';charset='utf-8'");
				$rid			=		I('id',0,'intval');
				$this->roleName	=		M('role')->where(array('id'=>$rid))->getField('remark');
				$node			=		M('Node')->order('sort')->field('id,name,pid,title')->select();
				$access			=		M('Access')->where(array('role_id'=>$rid))->getField('node_id',true);
				$this->list		=		Node_merge($node,$access);					
				//P($list);die;
				$this->rid		=		$rid;
				$this->display();
		}
		
		public function accessHandle(){
				$access			=		I('access');
				$role_id		=		I('role_id','','intval');
				$Dao			=		M('Access');
				$Dao->where(array('role_id'=>$role_id))->delete();
				foreach($access as $key=>$value){				
					$node		=       explode('_', $value);
					$pid		=       M('Node')->where(array('id'=>$node[0]))->getField('pid');
					$data		=		array('role_id'=>$role_id,'node_id'=>$node[0],'level'=>$node[1],'pid'=>$pid);
				    $result		=		$Dao->data($data)->add();  
				   
				}
				//P($result);exit;
				if( $result){
					$this->success('修改成功',U('Admin/Rbac/modifyAcess',array('id'=>$role_id),''),1);
				}
				else{
					$this->error('修改失败');
				}
				
				
		}
		
	}
?>