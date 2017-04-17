<?php if (!defined('THINK_PATH')) exit();?>﻿

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>oa系统</title>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="__PUBLIC__/css/css.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="100%" height="90" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CCFF" bgcolor="#FFFFFF">
  <tr>
    <td width="355" height="119" background="__PUBLIC__/images/top02.gif"><div align="left"><a href="#" target="_blank"><img src="__PUBLIC__/images/logo.jpg" width="130" height="80" hspace="10" border="0" /></a></div></td>
    <td width="250" background="__PUBLIC__/images/top02.gif">
	  <div id="jnkc">	  </div> 
    </td>
    <td width="203" background="__PUBLIC__/images/top02.gif"><br>
    
    <td width="429" background="__PUBLIC__/images/top02.gif" align="right" style="margin-left:30px;"><present name="_SESSION['sin_user']"><?php echo ($_SESSION['sin_user']); ?>你好!<a href="<?php echo U('Admin/Login/logoff');?>" target="_top" class="left-font01">[退出]</a></td>
  </tr>
</table>
</body>
</html>