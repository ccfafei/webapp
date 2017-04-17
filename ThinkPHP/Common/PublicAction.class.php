 <?php 
 /**
     +--------------------------------------------------------------------
     *本模块用于导入thinkphp的验证码模块
     +--------------------------------------------------------------------
     */
class PublicAction extends Action{
	
    Public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
    
 }
 
  ?>