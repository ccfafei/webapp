<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/Public/css/showlist.css" />
<script type="text/javascript" src="/Public/Js/Jquery/jquery.js"></script>

<script type="text/javascript" >var checknameURL ='<?php echo U("Admin/Index/checkname/","","");?>'</script>
<script type="text/javascript" src="__PUBLIC__/js/useradd.js"></script>
<script type="text/javascript" >var userURL ='<?php echo U("Admin/Index/userinfo/","","");?>'</script>

</head>
<body>
<!-- 添加用户开始-->	
	
	  
	  	
	  	<form action="<?php echo U('Admin/Index/useradd','','');?>" method="post">
	  	
	  		<table  width="99%" height="100%" border="1">
	  			<tr> <td colspan="2" align="left"><h4>添加用户</h4></td></tr> 
	  			<tr>
	  				<td align="right" width="20%"> 帐号:</td><td><input type="text" name="adduser" class="adduser" > <span >*</span> <strong id="usererror"></strong></td>
	  			</tr>
	  			
	  			<tr>
	  				<td align="right">密码:</td><td><input type="password" name="addpwd" class="addpwd">  <span >*</span> <strong id="pwderror"></strong></td>
	  			</tr>
	  			
	  			<tr>
	  				<td align="right">重复密码:</td><td><input type="password" name="checkpwd" class="checkpwd"> <span >*</span>  <strong id="checkerror"></strong></td>
	  			</tr>
	
	  			<tr>
	  				<td align="right">邮箱:</td><td><input type="text" name="addmail" class="addmail"> <span >*</span>   <strong id="mailerror"></strong></td></td>
	  			</tr>
	  			<tr>
	  				<td align="right">管理员级别:</td><td>
	  					<select class="lop" name="lop">
	  						<?php if(is_array($role)): foreach($role as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["remark"]); ?></option><?php endforeach; endif; ?>
	  					</select>  
	  				</td>
	  			</tr>
	  			<tr>
	  				<td align="right">真实姓名:</td><td><input type="text" name="addname" class="addname" >  <span >*</span><strong id="usererror"></strong></td>
	  			</tr>
	  			
	  			<tr>
	  				<td align="right">启用状态:</td><td><select class="uop" name="uop"><option selected="selected" value="1">启用</option><option value="0">停用</option></select>  </td>
	  			</tr>
	  			
	  			<tr>
	  				<td ></td>
	  				<td>			      
	  					<input type="button" name="addsub" class="addsub" value="确定" >
	  					<input type="reset" name="addsub" class="addsub" value="取消" style="margin-left:10px">
	  					<input type="hidden" name="addurl" class="addurl" value='<?php echo U("Admin/Index/UserAdd/","","");?>'>
	  					
	  				</td>
	  			</tr>
	  		</table>
	  	
	  	</form>
	 
	
<!-- 添加用户结束-->	
</body>
</html>