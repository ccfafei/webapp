<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加角色</title>
<link href="__PUBLIC__/css/showlist.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	
		<table width="99%" height="100%" border="1" >
			<caption><h4>角色信息表</h4></caption>
			<tr><td>序号</td><td>角色ID</td><td>角色名称</td><td>角色描述</td><td >开启状态</td><td>操作</td></tr>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr><td><?php echo ($key+1); ?></td><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["remark"]); ?></td><td><?php echo ($vo["status"]); ?></td><td><a href="<?php echo U('Admin/Rbac/modifyAcess',array('id'=>$vo['id']));?>">配置</a></td></tr><?php endforeach; endif; ?>

		</table>

</body>
</html>