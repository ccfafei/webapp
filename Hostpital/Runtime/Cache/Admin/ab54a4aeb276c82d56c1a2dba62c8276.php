<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加角色</title>
<link href="__PUBLIC__/css/node.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div class="allbox">
		
		<div class="addimg">  <a href="<?php echo U('Admin/Rbac/addApp');?>">添加应用</a></div>	
		
		<div class="app">
			<?php if(is_array($list)): foreach($list as $key=>$app): ?><div class="actionadd">
			
					<p><b><?php echo ($app['title']); ?></b>[<span><a href="<?php echo U('Admin/Rbac/addApp',array('pid'=>$app['id'],'level'=>2),'');?>">添加控制器</a></span>][<span><a href="#">修改</a></span>][<span><a href="#">删除</a></span>]</p>
					<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><div class="action">
						
							<div class="actionbox"><?php echo ($action['title']); ?>[<span><a href="<?php echo U('Admin/Rbac/addApp',array('pid'=>$action['id'],'level'=>3),'');?>">添加方法</a></span>]</div>
							<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><div class="method"><?php echo ($method['title']); ?>[<span><a href="#">修改</a></span>][<span><a href="#">删除</a></span>]</div><?php endforeach; endif; ?>
			
				</div><?php endforeach; endif; ?>
				
				</div><?php endforeach; endif; ?>
		</div>
	</div>
</body>
</html>