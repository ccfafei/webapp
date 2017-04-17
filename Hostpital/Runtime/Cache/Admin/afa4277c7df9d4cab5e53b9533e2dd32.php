<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>
	用户搜索
</title>
<Mata http-equiv="Content=Type" content="text/html;charset=utf-8">
<script type="text/javascript" src="/Public/Js/Jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/css/showstatus.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/showlist.css" />
<script type="text/javascript" src="__PUBLIC__/js/delConfirm.js" charset="utf-8"></script>
<script type="text/javascript" src="__PUBLIC__/js/usermodify.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/useradd.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/search.js"></script>
<script type="text/javascript" >var searchURL ='<?php echo U("Admin/Index/search/","","");?>'</script>
<script type="text/javascript" >var modifyURL ='<?php echo U("Admin/Index/modifyUser/","","");?>'</script>
<script type="text/javascript" >var delURL ='<?php echo U("Admin/Index/delUser/","","");?>'</script>
<script type="text/javascript" >var checknameURL ='<?php echo U("Admin/Index/checkname/","","");?>'</script>
<!--<script type="text/javascript" >var AdsearchURL ='<?php echo U("Admin/Index/Adsearch/","","");?>'</script>-->
<script type="text/javascript" >var searchURL ='<?php echo U("Admin/Index/search/","","");?>'</script>

<body>
  

      <div class="sch" style="position:relative">   请输入用户名:<input type="text" name="search" class="search" style="position:relative" ><button class="qbtn" name="qbtn">搜索</button> 
	  </div>
      
     
    <div class="after" >
	  <table width="1100" border="1" cellpadding="0" cellspacing="0"  >
	        <tr></tr>
			<tr style="background:#cededd"><th>ID</th><th>用户名</th><th>姓名</th><th>性别</th><th>年龄</th><th>登录时间</th><th>登录ip</th><th>账号状态</th><th>操作</th></tr>

		<form method="post"></form>
		<?php if(is_array($resultList)): $i = 0; $__LIST__ = $resultList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td width="5%"><input type="hidden" name=uid id="sid" value="<?php echo ($vo["uid"]); ?>"/><strong ><?php echo ($vo["uid"]); ?></strong></td>
			<td width="10%"><strong> <?php echo ($vo["username"]); ?></strong></td>
			<td width="10%"><input class="modInput" id="realname" value=""/><strong  class="iv"><?php echo ($vo["realname"]); ?></strong></td>
			<td width="10%">
				<strong  >
					<?php if($vo['level'] == 1): ?>系统管理员<?php endif; ?>
					<?php if($vo['level'] == 2): ?>后台管理员<?php endif; ?>
					<?php if($vo['level'] == 3): ?>网络咨询员<?php endif; ?>
				</strong>
			</td>
			<td width="10%"><strong ><?php echo ($vo["role_id"]); ?></strong></td>
			<td width="15%"><strong ><?php echo (date('Y-m-d H:i:s',$vo["addTime"])); ?></strong></td>
			<td width="15%"><strong ><?php echo (date('Y-m-d H:i:s',$vo["modifyTime"])); ?></strong></td>
			
			<td width="10%"><strong ><?php if($vo["status"] == 1): ?>正常  <?php else: ?> 停用<?php endif; ?></strong></td>
			<td width="10%"><button id="delbtn"  onclick="delConfirm(<?php echo ($vo["uid"]); ?>)">删除</button>&nbsp;&nbsp;<button class="modbtn">修改</button></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</form>
	  </table>
	  <br>
 </div> 
    
 </body>
 </html>