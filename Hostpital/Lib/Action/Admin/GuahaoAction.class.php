<?php
	class GuahaoAction extends  CommonAction{
		//患者管理 列表
		public function showPatient(){
			header('Content-Type:text/html;charset=utf-8');
			$username			=		I('keywords','','');
			$hostName			=		I('hostName','','');
			$status				=		I('front','','');
			//P($status);
			$this->hostName		=		M('Hostinfo')->field('hid,name')->select();
			if(!empty($username)||!empty($hostName)||!empty($status)){//判断是否提交查询
				$Dao=D('Meet');
				$fields			=		$_GET['_URL_'][3];//从url后获取查询的内容 
				switch ($fields){//因查询内容不同，所以要判断
					case 'keywords':
					$condition	 =		array('username'=>array('like','%'.$username.'%'));
					break;
					case 'front':
					$condition	 =		array('status'=>$status);
					break;
					case 'hostName':
					$condition	 =		array('hostname'=>$hostName);
					case 'hostName':
					$lists = M('Hostinfo')->field('hid')->where(array('name'=>$hostName))->find();
					//echo ($lists['hid']);die;
					$condition	 =		array('hostid'=>$lists['hid']);
					break;
				}
				//P($condition);die;
				$result			=		$Dao->relation(true)->where($condition)->select();
			    //P($result);die;
				if($result>0){
					$this->list	=		$result;
					$this->display();
				}
				else{
					$this->error('未找到相关结果','',1);
				}
			}
			else{
			
				$Dao=D('Meet');
				$count			=		$Dao->count();
				import("ORG.Util.Page");
				$p				= 		new Page($count, 10);
				$p->setConfig('header', '条数据');
				$p->setConfig("theme","<span class='info'>%totalRow%  %header% %nowPage%/%totalPage% 页</span>  %first% %upPage% %linkPage% %downPage% %end%");
				$this->page 	= 		$p->show();
				//P($count);die;
				$ne=$this->list		=		$Dao->relation(true)->limit($p->firstRow.','.$p->listRows)->select();
				//P($ne);die();
				$this->display();
			}
		}
		
		//接待患 者
		public function seePatient(){
				$id				=		I('id','','intval');
				$data			=		array('status'=>1);
				if(M('Meet')->where(array('id'=>$id))->save($data)){
					$this->success('接待成功');
				}
				else{
					$this->error('操作失败');
				}
		}
		
		//删除患者信息
		public function deletePatient(){
				$id_str		=		I('id_str','','');
				if(preg_match("/[|]/",$id_str)){
					$get_id		=		substr($id_str,0,strlen($id_str)-1);
					$id			=       explode('|',$get_id);
				}
				else{
					$id[]			=		intval($id_str);
				}
				
					foreach ($id as $v){
						$delResult=M('Meet')->where(array('id'=>$v))->delete();
					}
					
					if($delResult){$this->success('删除成功');}
					else{$this->error('删除失败');}
				
		}
	
		//添加医院名称
		public function  hostAdd(){
			$hid	   		    =		I('hid','','intval');
			//P($hid);die;
			$this->title		=		I('title','','');
			$result				=		M('Hostinfo')->where(array("hid"=>$hid))->select();
			//P($result);die;
			foreach ($result as $v){
				$this->name		=		$v['name'];
				$this->link		=		$v['link'];
				$this->content	=		$v['content'];
			}
			$this->hid			=		$hid;
			$this->display();
		}
		
		//处理添加的结果
		public function hostAddHandle(){
				$hid			=		I('hid','','intval');
				$name			=		I('name','','');
				$link			=		I('link','','');
				$content		=		I('content','','');
				//echo ''.$link;die;
				//P($hid);die;
				if(empty($hid)){
					$result		=		M('Hostinfo')->add($_POST);
					if($result){
						$this->success('添加成功',U('Admin/Guahao/hostList'),'3');
					}
					else{
						$this->error('添加失败');
					}	
				}
				else{
					    $data	=	array('name'=>$name,'link'=>$link,'content'=>$content);
					    $mod	=	M('Hostinfo')->where(array('hid'=>$hid))->data($data)->save();
						if($mod){
							$this->success('修改成功',U('Admin/Guahao/hostList'),'3');
						}
						else{
							$this->error('修改失败');
						}
				}
			}
		//医院详细列表
		public function hostList(){
			$Dao		=		M('Hostinfo');
			$this->list	=		$Dao->order('hid')->select();
			$this->display();
		}
		//删除医院
		public function hostDelete(){
			$hid		=		I('hid','','intval');
			$del		=		M('Hostinfo')->where(array('hid'=>$hid))->delete();
			if($del){
				$this->success('删除成功',U('Admin/Guahao/hostList','',''));
			}
			else{
				$this->error('删除失败');
			}
		}
	}