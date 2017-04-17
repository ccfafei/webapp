<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>节点信息表</title>
<link href="__PUBLIC__/css/showlist.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	
		<table width="99%" height="100%" border="1" >
			<caption><h4>配置信息</h4></caption>
			<tr><td>序号</td><td>节点ID</td><td>节点名称</td><td>角色描述</td><td>权限</td><td >开启状态</td><td>操作</td></tr>
			<?php if(is_array($app)): foreach($app as $key=>$vo): ?><tr><td width="5%"><?php echo ($key+1); ?></td><td width="5%"><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["title"]); ?></td><td> <?php echo ($vo['level']); ?></td><td width="15%"><?php echo ($vo["status"]); ?></td><td>[<a href="">配置</a>]</td></tr><?php endforeach; endif; ?>
				
				
			
		</table>

</body>
</html>