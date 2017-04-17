<?php if (!defined('THINK_PATH')) exit();?>﻿
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(__PUBLIC__/images/left.gif);
}
-->
</style>
<link href="__PUBLIC__/css/css.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language=JavaScript>
function tupian(idt){
    var nametu="xiaotu"+idt;
    var tp = document.getElementById(nametu);
    tp.src="__PUBLIC__/images/ico05.gif";//图片ico04为白色的正方形
	
	for(var i=1;i<30;i++)
	{
	  
	  var nametu2="xiaotu"+i;
	  if(i!=idt*1)
	  {
	    var tp2=document.getElementById('xiaotu'+i);
		if(tp2!=undefined)
	    {tp2.src="__PUBLIC__/images/ico06.gif";}//图片ico06为蓝色的正方形
	  }
	}
}

function list(idstr){
	var name1="subtree"+idstr;
	var name2="img"+idstr;
	var objectobj=document.all(name1);
	var imgobj=document.all(name2);
	
	
	//alert(imgobj);
	
	if(objectobj.style.display=="none"){
		for(i=1;i<10;i++){
			var name3="img"+i;
			var name="subtree"+i;
			var o=document.all(name);
			if(o!=undefined){
				o.style.display="none";
				var image=document.all(name3);
				//alert(image);
				image.src="__PUBLIC__/images/ico04.gif";
			}
		}
		objectobj.style.display="";
		imgobj.src="__PUBLIC__/images/ico03.gif";
	}
	else{
		objectobj.style.display="none";
		imgobj.src="__PUBLIC__/images/ico04.gif";
	}
}

</SCRIPT>

<body>




<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <TD>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="__PUBLIC__/images/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="__PUBLIC__/images/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font01"> <present name="_SESSION['sin_user']"><?php echo ($_SESSION['sin_user']); ?>您好，</td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="<?php echo U('Admin/Login/logoff');?>" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		
		
		
		<!-- 挂号管理    -->
		  
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img7" id="img7" src="__PUBLIC__/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('7');" >挂号管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree7" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu16" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%">
						<a href="<?php echo U('Admin/Guahao/showPatient/');?>" target="mainFrame" class="left-font03" onClick="tupian('16');">挂号列表</a></td>
				</tr>
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu17" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%">
						<a href="<?php echo U('Admin/Guahao/hostAdd',array('title'=>'添加医院信息'));?>" target="mainFrame" class="left-font03" onClick="tupian('17');">添加医院</a></td>
				</tr>
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu18" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%">
					<a href="<?php echo U('Admin/Guahao/hostList');?>" target="mainFrame" class="left-font03" onClick="tupian('18');"> 医院列表</a></td>
				</tr>
					
				  
      </table>
     
		<!--  挂号结束    -->
		
<!-- 登录系统开始 -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="8%"><img name="img5" id="img5" src="__PUBLIC__/images/ico04.gif" width="8" height="11" /></td>
                  <td width="92%"><a href="javascript:" target="mainFrame" class="left-font03" onClick="list('5');">登录管理</a></td>
                </tr>
            </table></td>
          </tr>
      </table>

	  <table id="subtree5" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">

			
      		<tr>
         		 <td width="9%" height="20"><img id="xiaotu13" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
          		 <td width="91%"><a href="<?php echo U('userinfo');?>" target="mainFrame" class="left-font03" onClick="tupian('13');">用户列表</a></td>
        	</tr>
        	
        	<tr>
         		 <td width="9%" height="20"><img id="xiaotu19" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
         		 <td width="91%"><a href="<?php echo U('useraddForm');?>" target="mainFrame" class="left-font03" onClick="tupian('19');">添加管理员</a></td>
     		</tr>
     		
     		<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="<?php echo U('mypassword');?>" target="mainFrame" class="left-font03" onClick="tupian('20');">修改个人密码</a></td>
			</tr>

        
      </table>
	  <!-- 登录系统结束-->



		<!--  权限系统开始    -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="__PUBLIC__/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('8');" >权限管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree8" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				   <td width="9%" height="22" ><img id="xiaotu21" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="<?php echo U('Admin/Rbac/addRole');?>" target="mainFrame" class="left-font03" onClick="tupian('21');">添加角色</a></td>
				</tr>
				
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu23" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="<?php echo U('Admin/Rbac/showRole');?>" target="mainFrame" class="left-font03" onClick="tupian('23');">配置角色</a></td>
				</tr>
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu22" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="<?php echo U('Admin/Rbac/addNode');?>" target="mainFrame" class="left-font03" onClick="tupian('22');">添加节点</a></td>
				</tr>
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu24" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="<?php echo U('Admin/Rbac/showNode');?>" target="mainFrame" class="left-font03" onClick="tupian('24');">显示节点</a></td>
				</tr>
      </table>
		<!--  任务系统结束    -->

		




	
     <!-- 系统帮助开始 -->
     <!--
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
        <tr>
          <td height="29"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="8%"><img name="img6" id="img6" src="__PUBLIC__/images/ico04.gif" width="8" height="11" /></td>
                <td width="92%"><a href="mode.html" target="mainFrame" class="left-font03" onClick="list('6');">系统帮助</a></td>
              </tr>
          </table></td>
        </tr>
      </table>
	  <table id="subtree6" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
        <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="mode.html" target="mainFrame" class="left-font03" onClick="tupian('15');">用户手册</a></td>
        </tr>
        <tr>
          <td height="20"><img id="xiaotu16" src="__PUBLIC__/images/ico06.gif" width="8" height="12" /></td>
          <td><a href="mode.html" target="mainFrame" class="left-font03" onClick="tupian('16');">规章制度</a></td>
        </tr>
      </table>
  -->
	 <!-- 系统帮助结束-->

	
</body>
</html>