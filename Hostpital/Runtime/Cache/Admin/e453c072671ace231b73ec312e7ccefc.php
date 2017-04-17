<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>
	用户登录信息
</title>
<Mata http-equiv="Content=Type" content="text/html;charset=utf-8">
<script type="text/javascript" src="/Public/Js/Jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/css/showstatus.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/showlist.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/pager.css">
<script type="text/javascript" src="__PUBLIC__/js/usermodify.js"></script>
<script type="text/javascript" >var delURL ='<?php echo U("Admin/Index/delUser/","","");?>'</script>
<script type="text/javascript" >var searchURL ='<?php echo U("Admin/Index/search/","","");?>'</script>
<script type="text/javascript" >var userinfoURL ='<?php echo U("Admin/Index/userinfo/","","");?>'</script>
<script type="text/javascript" src="__PUBLIC__/js/delConfirm.js" ></script>
<!-- <script type="text/javascript" src="__PUBLIC__/js/usermodify.js"></script>-->
<script type="text/javascript" src="__PUBLIC__/js/search.js"></script>
<script type="text/javascript" >var modifyURL ='<?php echo U("Admin/Index/modifyUser/","","");?>'</script>
<style type="text/css">
<!--
.STYLE1 {color: #CCCCCC}
-->
</style>

</head>
<body>
             
<!-- 用户搜索开始 -->
      <div class="sch">   请输入用户名:<input type="text" name="search" class="search" ><button class="qbtn" name="qbtn">搜索</button> 
	  </div>
       <div class="showlist"></div>
       <div class="nbr"></div>
<!-- 用户搜索结束 -->
       
<!-- 显示用户信息 开始-->
      <div class="after" >
	  <table width="1100" border="1" cellpadding="0" cellspacing="0"  >
	        <tr></tr>
			<tr  height="40"  style="background:#cededd"><th>ID</th><th>用户名</th><th>真实姓名</th><th>用户组</th><th> 创建时间</th><th>修改时间</th><th>账号状态</th><th>操作</th></tr>

		<form method="post"></form>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td width="5%"><input type="hidden" name=uid id="sid" value="<?php echo ($vo["uid"]); ?>"/><strong ><?php echo ($vo["uid"]); ?></strong></td>
			<td width="10%"><strong> <?php echo ($vo["username"]); ?></strong></td>
			<td width="10%"><input class="modInput" id="realname" value=""/><strong  class="iv"><?php echo ($vo["realname"]); ?></strong></td>
			<td width="10%">
				<strong >
					<?php if(is_array($vo["Roles"])): foreach($vo["Roles"] as $key=>$vr): echo ($vr["name"]); ?> (<?php echo ($vr["remark"]); ?>)<?php endforeach; endif; ?>
				</strong>
			</td>
		
			<td width="15%"><strong ><?php echo (date('Y-m-d H:i:s',$vo["addTime"])); ?></strong></td>
			<td width="15%"><strong ><?php echo (date('Y-m-d H:i:s',$vo["modifyTime"])); ?></strong></td>
			
			<td width="10%"><strong ><?php if($vo["status"] == 1): ?>正常  <?php else: ?> 停用<?php endif; ?></strong></td>
			<td width="10%"><button id="delbtn"  onclick="delConfirm(<?php echo ($vo["uid"]); ?>)">删除</button>&nbsp;&nbsp;<button class="modbtn">修改</button></td>
			
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</form>
	  </table>
	  <br>
 	</div> 
      <div class="clear"></div>
    <!-- 分页 -->	
		<div class="page"><div class="pagerInfo"><?php echo ($page); ?></div></div>
    <!-- 分页结束 -->	

<!-- 显示用户信息 结束-->	  

</body>
</html>