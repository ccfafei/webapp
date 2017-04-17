<?php if (!defined('THINK_PATH')) exit();?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=7">
        <link type="text/css" href="__PUBLIC__/css/page_right.css" rel="stylesheet">
        <script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.js"></script>
       
        <script type="text/javascript" >var checkPasswordURL='<?php echo U("Admin/Index/checkPassword/","","");?>'</script>
         <script type="text/javascript" src="__PUBLIC__/js/checkPassword.js"></script>
        
       
</head>
<body>
        <div class="page_right_area">
            <div class="title"><span></span><strong>修改个人密码</strong></div>
            <div class="content">
                <form name="form1" method="POST"  action="<?php echo U('Admin/Index/modifyPassword','','');?>">
                    <table width="100%" border="0" cellspacing="1" class="body_table_bg">
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tbody><tr>
                            <td width="120" align="right" id="FuserName_title">用户名</td>
                            <td><?php echo ($_SESSION['sin_user']); ?><input type="hidden"/ name="<?php echo ($_SESSION['sin_user']); ?>"></td>
                            
                        </tr>
                        <tr>
                            <td width="120" align="right" id="FuserCode_title">用户编号</td>
                            <td><?php echo ($vo['uid']); ?></td>
                        </tr>                        
                        <tr>
                            <td width="120" align="right" id="Fpassword_title">原始密码</td>
                            <td>
                                <input name="Fpassword" type="password" id="Fpassword" size="22" maxlength="16" >
                               <span id="pwdmsg"> 密码请设置长度8-16位，如果不修改密码，请保持为空</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="120" align="right" id="passwordnew_title">新密码</td>
                            <td>
                                <input name="passwordnew" type="password" id="passwordnew" size="22" maxlength="16">
                                密码请设置长度8-16位，如果不修改密码，请保持为空
                            </td>
                        </tr>
                        <tr>
                            <td align="right" id="passwordnew2_title">重复新密码</td>
                            <td>
                                <input name="passwordnew2" type="password" id="passwordnew2" size="22" maxlength="16">
                                两次输入的密码必须一致，如果不修改密码，请保持为空
                            </td>
                        </tr>
                        <tr>
                            <td align="right">管理级别</td>
                            <td>系统管理员</td>
                        </tr>
                        <tr>
                            <td align="right">真实姓名</td>
                            <td><?php echo ($vo['realname']); ?></td>
                        </tr>
                        <tr>
                            <td align="right">邮箱</td>
                            <td><?php echo ($vo['email']); ?></td>
                        </tr>
                        <tr>
                            <td align="right">加入时间</td>
                            <td><?php echo (date('Y-m-d',$vo['addTime'])); ?></td>
                        </tr>
                        <tr>
                            <td align="right">最后一次登录时间</td>
                            <td><?php echo (date('Y-m-d',$vo['loginTime'])); ?></td>
                        </tr>
                        <tr>
                            <td width="120" align="right">&nbsp;<input type="hidden" name="uid" value="<?php echo ($vo['uid']); ?>"/></td>
                            <td><input type="submit" value="修改"  class="submit" id="sub">
                                <input type="button" value="返回" name="back" class="submit" onclick="history.go(-1)"></td>
                        </tr>
                    </tbody><?php endforeach; endif; ?>
                    </table>
                </form>
            </div>
        </div>
    
</body></html>