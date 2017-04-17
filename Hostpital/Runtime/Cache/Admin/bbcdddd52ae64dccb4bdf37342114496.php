<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加角色</title>
<link href="__PUBLIC__/css/showlist.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<form method="post" action="<?php echo U('Admin/Rbac/addRoleHandle');?>">
		<table width="99%" height="100%" border="1" >
			
			<tr><td colspan="2" align="left"><h4>添加角色</h4></td></tr>
			<tr><td width="20%" align="right">角色名称</td><td><input type="text" name="name" /></td></tr>
			<tr><td width="20%" align="right">角色描述</td><td><input type="text" name="remark" /></td></tr>
			<tr>	
				<td width="20%" align="right">开启状态</td>
				<td><input type="radio" name="status" value="1"  checked="checked"/>开启	<input type="radio" name="status" value="0"  />关闭</td>
			</tr>
			<tr><td></td><td ><input type="submit" name="sub" value="添加"/></td></tr>
		</table>
	</form>
</body>
</html>