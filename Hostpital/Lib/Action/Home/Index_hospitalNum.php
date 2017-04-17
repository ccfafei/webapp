  <html>
  <head>
  <title>
  网上预约挂号
  </title>
  <meta content="text/html; charset=utf8" http-equiv="Content-Type">
  <link rel="stylesheet" type="text/css" href="public/style/common.css">
  </head>
  <body>
  <?php 
  date_default_timezone_set('PRC');
  //在这里防止客户构造url盗取个人隐私
   $get_id = base64_decode($_GET['id']);
   //print_r($get_id);
   //$get_info=explode('|',($_GET['id']));
  // print_r($get_id);exit();
   $get_info = extract(json_decode($get_id,true));
   // print_r($get_info);
   // echo $hospital_num;
 
  ?>
  
  <div class="ghbox">
    
    <div class="ghright border1">
	  <div class="secpath" style="height:40px;">网上预约挂号<a name="hao"></a></div>
	  
<div style="height:25px; line-height:20px; padding-left:108px;"><strong>温馨提示：您提交的个人信息已进行保密处理，祝您早日康复！</strong></div>
<table style="background:url(public/images/guahaobg.jpg) no-repeat;" align="center" border="0" cellpadding="0" cellspacing="0" width="509">
  <tbody><tr>
    <td height="256" valign="top" width="211">
    <div style="padding-top:60px; padding-left:20px; height:33px; font-size:20px; font-family:'黑体'; color:#FFFFFF;">预约号：
    <span style="font-family:Arial, Helvetica, sans-serif"><?php echo $hospital_num; ?></span>
    </div><div style="color:#FFFFFF; padding-left:23px; line-height:160%;">
    <strong>请记下您的预约号<br>
就诊时凭此预约号与导医联系!</strong></div></td>
    <td valign="top" width="298"><table style="margin-top:20px; border-left:1px solid #000000; border-top:1px solid #000000;" border="0" cellpadding="0" cellspacing="0" width="272">
      <tbody><tr>
        <td class="ghtb" height="28" width="75">预约号：</td>
        <td class="ghtb" width="196">&nbsp;胃肠专家号&nbsp;<span style="font-family:Arial, Helvetica, sans-serif;color:red;"><?php echo $hospital_num; ?></span></td>
      </tr>
	  <tr>
        <td class="ghtb" height="28" width="75">预约日期</td>
        <td class="ghtb" width="196">&nbsp;<span style="font-family:Arial, Helvetica, sans-serif"><?php echo date('Y-m-d',$yul); ?></span></td>
      </tr>
	  <tr>
        <td class="ghtb" height="28" width="75">姓名：</td>
        <td class="ghtb" width="196">&nbsp;&nbsp;<?php echo $username; ?></td>
      </tr>
      <tr>
        <td class="ghtb" height="28">性别：</td>
        <td class="ghtb">&nbsp;
        
        <?php 
          echo $sex==0?'男':'女 ';
        /*switch($get_info[3]){
         case '0':
         	echo '男';
         	break;
         case '1':
         	echo '女';
         	break;
        }
       */
        ?>
        
        
        </td>
      </tr>
      <tr>
        <td class="ghtb" height="28">年龄：</td>
        <td class="ghtb">&nbsp;&nbsp;<?php echo $age; ?>岁</td>
      </tr>
      <tr>
        <td class="ghtb" height="28">电话：</td>
        <td class="ghtb">&nbsp;<?php echo $tel; ?></td>
      </tr>
      <tr>
        <td class="ghtb" height="42">病情：</td>
        <td class="ghtb"><?php echo substr($cont,0,25); ?></td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:15px;" height="49">&nbsp;<strong><font color="#006600">预约挂号成功，请记下您的预约号，就诊时凭此预约号与导医联系!</font></strong></td>
    </tr>
</tbody></table>
	
	</div>
  </div>
</div>

  </body>
  </html>