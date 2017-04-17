<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0067)http://yy.hzweichang120.com/admin/system/index.php -->
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<META content=ie=7 http-equiv=x-ua-compatible>
<LINK rel=stylesheet type=text/css 
href="/Public/css/page_right.css">
<LINK rel=stylesheet type=text/css 
href="/Public/css/pager.css">
<SCRIPT type=text/javascript src="/Public/js/Jquery/jquery.js"></SCRIPT>

<SCRIPT type=text/javascript src="/Public/js/common.js"></SCRIPT>

<META name=GENERATOR content="MSHTML 8.00.6001.18702">
</HEAD>
<BODY>
<DIV class=page_right_area>
<DIV class=title><SPAN></SPAN><STRONG>网站前台页面菜单列表</STRONG></DIV>
<DIV class=content>
<TABLE class=body_table_bg border=0 cellSpacing=1 width="100%">
  <TBODY>
  <TR>
    <TH>序号</TH>
    <TH>医院ID</TH>
    <TH>医院名称</TH>
    <TH>医院网址</TH>
    <TH>医院简介</TH>
    <TH colSpan=3 align=middle>管理</TH></TR>
  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><TR>
	    <TD><?php echo ($key+1); ?></TD>
	    <TD class=readonlyInput align=middle><?php echo ($vo["hid"]); ?></TD>
	    <TD><?php echo ($vo["name"]); ?></TD>
	    <TD><?php echo ($vo["link"]); ?></TD>
	    <TD>
	      <P><SPAN style="FONT-SIZE: larger"><?php echo ($vo["content"]); ?></SPAN><td> 
	      </SPAN></P>
	    <TD width=50><A 
	      href="<?php echo U('Admin/Guahao/hostAdd',array('hid'=>$vo['hid'],'title'=>'修改医院信息'),'');?>">编辑</A></TD>
	    <TD width=50><A onclick="return getConfirm()" 
	      href="<?php echo U('Admin/Guahao/hostDelete',array('hid'=>$vo['hid']),'');?>">删除</A></TD>
  </TR><?php endforeach; endif; ?>

</DIV></DIV></BODY></HTML>