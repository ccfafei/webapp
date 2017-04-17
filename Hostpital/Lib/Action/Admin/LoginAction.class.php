<?php 
	class LoginAction extends  Action{
		
		/*dedecms 验证码*/
		
		public function verify()
		{
			import("ORG.Util.Verify");
			$verify = new Verify();
			$verify->display();
		}
		
		/**
		 +--------------------------------------------------------------------
		 *本方法用于加载thinkphp的验证码
		 +--------------------------------------------------------------------
		 */
			
		/* thinkphp使用的验证码*/
		/*
		Public function verify(){
			import("ORG.Util.Image");
			Image::buildImageVerify();
			
		}
		*/
		public function index(){
			$this->display();
		}
		
		/**
		 +--------------------------------------------------------------------
		 *本方法用于检查用户登录
		 +--------------------------------------------------------------------
		 *@Dao 返回实例化ts_user 表模块
		 *@data 提交查询的条件
		 +--------------------------------------------------------------------
		 */
		
		public function loginchk(){
			//header("Content-Type:text/html;charset=utf-8");
			//提交核对验证码
			//var_dump($_SESSION['verify']);
			//dump(md5(strtolower($_POST['verify'])));
			/*thinkphp验证码的处理*/
			/*
			if($_SESSION['verify'] != md5(strtolower($_POST['verify']))) {
				$this->error('验证码错误！')	;
			}
			*/
			/*dedecms for thinkphp验证码处理*/
			
			 if($_SESSION['verify'] != strtolower($_POST['verify'])) {
				$this->error('验证码错误！')	;
			 }
			
				$Dao = M('User');
				date_default_timezone_set("PRC");
				$data['username'] 		= 	$this->_post('username');
				$data['password'] 		= 	md5($this->_post('password'));
				$data['status'] 		= 	1;
				$insert['loginTime']	=	strtotime(date("Y-m-d H:i:s"));
				$insert['loginIP']		=	get_client_ip();
				//$result = $Dao->where($data)->select();
				
				//生成帐号验证
				
				import('ORG.Util.RBAC');
        		//C('USER_AUTH_MODEL','User');
       			//验证账号密码
       			$map=array();
       			$map['username']	=	$data['username'];
				$authInfo=RBAC::authenticate($map);
				//P($authInfo);die;
        		//$authInfo=RBAC::authenticate($data);
        		if(empty($authInfo)){
        			$this->error('账号不存在或者被禁用!');
        		}
        		
        		if($authInfo['password']!=md5($_POST['password'])){
        				$this->error('账号密码错误!');
        		}
        		else{
        				//保存最好一次登录时间和ip
        			
						$Dao->where(array('username'=>$data['username']))->save($insert);
						$_SESSION[C('USER_AUTH_KEY')]	=	$authInfo['uid'];//记录认证标记，必须有。其他信息根据情况取
						$_SESSION['sin_user']			=	$authInfo['username'];
						$_SESSION['loginTime']			=	$authInfo['loginTime'];
						$_SESSION['loginIP']			=	$authInfo['loginIP'];
										
						//超级管理员认证
						if($authInfo['username'] == C('RBAC_SUPERADMIN')){
							session(C('ADMIN_AUTH_KEY'),true);
						}
					   
						//读取用户的权限
						import('ORG.Util.RBAC');
						RBAC::saveAccessList();
						
						//P($_SESSION);die;
					    $this->success("登录成功",U("Admin/Index/index"));
        		}
        		
        				
			}
			
		

		
		/**
		 +--------------------------------------------------------------------
		 *本方法处理退出
		 +--------------------------------------------------------------------
		 */
		public function logoff(){
			session('sin_user',null); // 删除session
			session(null);
			redirect(U('Admin/Login/index'));
			exit();
		}
		
		
		
		
	}

?>