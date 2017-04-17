<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2013 
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: ccfafei <chuhappyday@163.com>
// +----------------------------------------------------------------------

class IndexAction extends CommonAction {
	
	/**
     +--------------------------------------------------------------------
     *本方法用于登录成功后的主页
     +--------------------------------------------------------------------
     */
	public function index(){
		header("Content-Type:text/html;charset=utf-8");
	
		$this->assign('sin_user',session('sin_user'));
		$this->display();
		//redirect(U('index'));
	}
    
	
    /**
     +--------------------------------------------------------------------
     *本方法用于显示用户信息,用到thinkphp的session
     +--------------------------------------------------------------------
     *@plist  查询的结果集  return array
     *
     */
    public function userinfo(){
    	header("Content-Type:text/html;charset=utf-8");
    	
    	    $Dao = D("User");
		    // 计算总数
		    
		    $count = $Dao->count();
		    // 导入分页类
		    import("ORG.Util.Page");
		    // 实例化分页类
		    $p = new Page($count, 10);
		    // 分页显示输出
			$p->setConfig('header', '条数据'); 
			$p->setConfig("theme","<span class='info'>%totalRow%  %header% %nowPage%/%totalPage% 页</span>  %first% %upPage% %linkPage% %downPage% %end%");
		    $show = $p->show();
    	    //$list = $Dao->table(array(C('DB_PREFIX').'user'=>'user',C('DB_PREFIX').'role'=>'role'))->where('user.level=role.id')->order('user.uid DESC')->limit($p->firstRow.','.$p->listRows)->select();
		    
		    $list = $Dao->relation(true)->limit($p->firstRow.','.$p->listRows)->select();
    	    //P($list);die;
		    $this->assign("list",$list);
    	    $this->assign("level",$list['level']);
    	    $this->assign("page",$show);
    	    //$level=$list['level'];

    	  
    	    
    	    $this->display();
    	
    }
    
    /**
     +--------------------------------------------------------------------
     *本方法用于删除用户信息
     +--------------------------------------------------------------------
     *@condition['uid'] URL传过来的用户id
     +--------------------------------------------------------------------
     */
    public function delUser(){
    	header("Content-Type:text/html;charset=utf-8");
    	if(!IS_AJAX){halt('不能提交空请求');}
    	$condition= I('uid','','intval');
    	$Dao = M('User');
    	$role_del = M('Role_user');
    	//echo $condition.'提交成功';die;
    	$result=$Dao->where(array('uid'=>$condition))->delete();
    	if($result){
    		   $delrol=$role_del->where(array('user_id'=>$condition))->delete();
    		   if($delrol){
    		  		 $this->ajaxReturn($result,"删除成功！",1);
    		   }
    	}
    	else{$this->ajaxReturn($result,"删除失败",0);}
    	
    }
     
    /**
     +--------------------------------------------------------------------
     *本方法用于修改ajax传过来用户信息;本实例用到 I方法
     +--------------------------------------------------------------------
     *如果非法构造url或者session为空提示无权修改;
     +--------------------------------------------------------------------
     */
    public function modifyUser(){
    	header("Content-type:text/html;charset=utf8");
    	$id = I('post.uid');
		$realname = I('post.realname','','htmlspecialchars');
		//$sex = I('post.sex','','htmlspecialchars');
		//$age = I('post.age','','htmlspecialchars');
		if(empty($id)){	
		    $this->error('跳转失败，你无权修改 !'); 
		}
		else{ 
	      		
				$data =array("realname"=>$realname);
		    	$moDao = M("User");
		    
		    	$modifystatus = $moDao->where('uid='.$id)->setField($data);   	
		    	
		    	if($modifystatus>0){
		    	    $this->ajaxReturn($modifystatus,"修改成功！",1);
		    	}
		    	else{
		    		$this->ajaxReturn(0,"修改失败！",0);
		    		
		    	}
			
		} 
    }
    
    
    /**
     +--------------------------------------------------------------------
     *本方法用于检测某个表中字段是否存在给定的值
     *@table  String  某个表
     *@field  String  表中的某个字段
     *@value  String  传给某个字段的值
     +--------------------------------------------------------------------
     */
    public function pubCheck($table,$field,$value){
    	    $Dao 				=		M($table);
    	    $conditions			=		array($field=>$value);
    		$result 			= 		$Dao->where($conditions)->select();
    		//dump($result);
    		if($result>0){
    			return true;
    		}
    		else{
    			return false;
    		}
			
    }
    
    /*调用公用方法用ajax返回结果*/
    public function checkName(){
    	$username = $this->_post('addname');
    	if($this->pubCheck("User","username",$username)){
    		$this->ajaxReturn($result,"该用户名已经存在！",0);
    	}
    		
    	else{
    		$this->ajaxReturn($result,"恭喜！可以使用!",1);
    	}
    		
    }
    
    public function useraddForm(){
    	$this->role	=	M('role')->field('remark,id')->select();
    	$this->display();
    }
    /**
     +--------------------------------------------------------------------
     *本方法用于添加用户信息,如果用户户在数据库存在，终止.最终都是以ajax方式返回前端
     +--------------------------------------------------------------------
     */
    public function userAdd(){
		  
    		$username = $this->_post('addname');
	    	if($this->pubCheck("User","username",$username)){
	    		
	    		   $this->ajaxReturn($result,"该用户名已经存在！",0);
	    	 }
			else{
			       
				    $list 				= 	M('User');
				    $data['realname'] 	= 	$this->_post('addname');
	    	        $data['password'] 	= 	md5($this->_post('addpwd'));
	    	        $data['username']	= 	$this->_post('adduser');
	    	        $data['email'] 		= 	$this->_post('addmail');
	    	        $data['level'] 		= 	$this->_post('addlevel');
	    	        $data['addTime']	=	time();
	    	        $data['status']		=	$this->_post('addstatus');	
	    	       
	    	       
					$addResult = $list->add($data);
					if($addResult){
						$user_id		=	$list->where(array('username'=> $data['username']))->getField("uid");
						M('role_user')->data(array('role_id'=> $data['level'] ,'user_id'=>$user_id))->add();
						$this->ajaxReturn($addResult,"添加成功！",1);
								 
					}
					else{$this->ajaxReturn($addResult,"添加失败！",0);die();}
				
			}
    }
    
    
   
    
    /**
     +--------------------------------------------------------------------
     *本方法用于提交后搜索用户
     +--------------------------------------------------------------------
     */
    public function Adsearch(){
    	header("Content-type:text/html;charset=utf8");
    	$Dao 				=		M('User');
    	$username 			= 		trim($this->_post('username'));
    	$map['username'] 	= 		array('like','%'.$username.'%');
    	//P($map);die();
    	$result = $Dao->where($map)->getField('username',true);
    	//dump($result);
    	if($result>0){
    		$this->ajaxReturn($result,'已经找到记录',1);
    	}
    	else{
    		$this->ajaxReturn($result,'',0);
    	}
    
    }
    
    /**
     +--------------------------------------------------------------------
     *本方法用于提交后搜索用户
     +--------------------------------------------------------------------
     */
    public function search(){
    	header("Content-type:text/html;charset=utf8");   	 
    	$Dao 				= 		M('User');
    	$username 			= 		trim($this->_get('userSeararch'));
    	$map['username'] 	= 		array('like','%'.$username.'%');
    	//P($map);die();
    	$result				= 		$Dao->where($map)->select();
    	//dump($result);
    	if($result>0){
    		$this->assign('resultList',$result);
    		$this->display();
    	}
    	else{
    		$this->error('没找到相关记录',U('Admin/Index/userinfo','',''));
    	}
    		
    }

    /**
     +--------------------------------------------------------------------
     *本方法用于显示登录修改密码表单
     +--------------------------------------------------------------------
     */
	public function mypassword(){
		$Dao	 		= 		M('User');
		$list	 		=		$Dao->where(array("username"=>session('sin_user')))->select();
		$this->list=$list;
		$this->display();
	}
	
 	 /**
     +--------------------------------------------------------------------
     *本方法用ajax方法进行密码修改时，密码核对
     +--------------------------------------------------------------------
     */
	public function checkPassword(){
		$Dao	 		= 			M('User');
		$Fpassword		=			md5(trim($_POST['Fpassword']));
		$result			=			$Dao->where(array("username"=>session('sin_user'),"password"=>$Fpassword))->select();
		if($result>0){
			$this->ajaxReturn($result,'ok',1);
		}
		else{
			$this->ajaxReturn($result,'error',0);
		}
	}

	 /**
	 +--------------------------------------------------------------------
	 *本方法用于修改密码
	 +--------------------------------------------------------------------
	 */
	public function modifyPassword(){
		$uid			=			I('post.uid');
		//P($uid);die;
		$Fpassword		=			I('post.Fpassword','','md5');
		$passwordnew	=			I('post.passwordnew','','md5');
		$data			=			array('password'=>$passwordnew);
		$Dao	 		= 			M('User');
		if(!empty($Fpassword)){
			if($Dao->where(array("uid"=>$uid,"password"=>$Fpassword))->select()){
				if($Dao->where(array("uid"=>$uid))->save($data)){
					$this->success('更改成功',U('Admin/Index/userinfo','',''));
				}
				else {$this->error('更新失败');}
			}
			else{
				$this->error('密码将不被修改');
			}
		}
	}
		
} 
?>