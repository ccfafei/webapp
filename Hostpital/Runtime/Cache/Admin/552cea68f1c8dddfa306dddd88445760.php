<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加角色</title>
<link href="__PUBLIC__/css/node.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="__PUBLIC__/js/Jquery/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/checkbox.js"></script>
<script type="text/javascript">
	
</script>
</head>

<body>
<div class="allbox">
	<form method="post" action="<?php echo U('Admin/Rbac/accessHandle');?>" name="form1">
		<div class="addimg"> <?php echo ($roleName); ?>权限</div>	
		<div class="app">
			<?php if(is_array($list)): foreach($list as $key=>$app): ?><div class="actionadd">
				
					<p>
						<b><?php echo ($app['title']); ?></b>
						<input type="checkbox" name="access[]" value="<?php echo ($app['id']); ?>_1" class="level1" <?php if($app["access"] == 1): ?>checked="checked"<?php endif; ?> />
					</p>
					<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><div class="action">
						
							<div class="actionbox">
								<?php echo ($action['title']); ?>
								
									<input type="checkbox"   value="<?php echo ($action['id']); ?>_2" class="level2"  name="access[]" <?php if($action["access"] == 1): ?>checked="checked"<?php endif; ?> />
								
							</div>
							<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><div class="method"><?php echo ($method['title']); ?>
								
									<input type="checkbox"  value="<?php echo ($method['id']); ?>_3" class="level3" name="access[]"   <?php if($method["access"] == 1): ?>checked="checked"<?php endif; ?> /> 
								
								</div><?php endforeach; endif; ?>
						
					</div><?php endforeach; endif; ?>
					
				</div><?php endforeach; endif; ?>
		</div>
		<input type="hidden" name="role_id" value="<?php echo ($rid); ?>"/>
		<input type="submit" value="确定" class="mod"/><input type="button" value="返回" onclick="window.history.go(-1)"/>
	</form>
	</div>
</body>
</html>