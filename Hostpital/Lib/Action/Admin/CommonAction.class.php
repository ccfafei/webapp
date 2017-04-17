<?php 
	class CommonAction extends Action{
		
		/*公用session入口*/		
		public function _initialize(){
			 if(!isset($_SESSION[C('USER_AUTH_KEY')])) {      //  if(!session(C('USER_AUTH_KEY'))){   
				//echo '用户没有登录';
				//dump(session('sin_user'));exit();
			 
				$this->redirect('Admin/Login/index');
			}
			
			//引入配置文件不需要验证的模块和方法
			$noAuth	=	in_array(MODULE_NAME, explode(',' , C('NOT_AUTH_MODULE')))|| in_array(ACTION_NAME,explode(',',C('NOT_AUTH_ACTION')));
			
			if(C('USER_AUTH_ON') && !$noAuth){
				import('ORG.Util.RBAC');
			    //P($_SESSION);die;
				//如果是分组配置需要加分组参数 
				//P(GROUP_NAME);die;
				RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限'); 
				//P(RBAC::AccessDecision(GROUP_NAME));
				
			}
		}
		
		/*这个地方就不能用else再跳转了，如果这样的话会永远重定向*/
		
	
	}

?>