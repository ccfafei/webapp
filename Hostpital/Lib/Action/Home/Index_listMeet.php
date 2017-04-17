<?php
 session_start(); 

include_once 'db_conn_class.php';

header("Content-type:text/html;charset=utf-8");

//表单过滤处理

 function var_format($str){
	if(!get_magic_quotes_gpc())
	{
		return addslashes(trim($str));
	}
	else{
		return trim($str);
	}	
}

/* 获取表单相关数据 
 * @username  患者姓名
* @age        年龄
* @sex        性别
* @ks         科室
* @tel        联系电话
* @cont       病情情况
* */
  // if (isset($_POST['Submit'])){
   	$username=var_format($_POST['username']);
	$age=intval(var_format($_POST['age']));
	$sex=var_format($_POST['sex']);
	$tel=var_format($_POST['tel']);
	$ks=var_format($_POST['ks']);
	$cont=var_format($_POST['cont'])==null?'不详':var_format($_POST['cont']);
	$yul=($_POST['yul'])==""?strtotime(date("Y-m-d H:i:s")):strtotime($_POST['yul']);
  // print_r($_POST);exit();

	
	//echo  $username.$yul;
    //如果插入成功判断是否存在用户名和者电话号码相同的，给出信息。
	
    $username_select=" SELECT id,username,tel FROM sclq_hospital_registration  where username='$username' and tel='$tel' ";
	//print_r($username_select);
    $result_select=$db->query($username_select);
	if(!$result_select){echo mysql_error();}
	 //echo "bbb";
    if(($num_rows=mysql_num_rows($result_select))>1){
    	$row = mysql_fetch_array($result_select);
    	$hospital_id=$row['id'];
    	
    	echo '<script language="javascript">
    		alert("您已经挂过号，所挂的号码是:'.$hospital_id.'");
    		window.location.href="index.html";
    			
    	    </script>';
			
    	
    }
    else{
      //echo "ccc";
	    //将用户提交数据传到数据库
		$addsql="INSERT INTO sclq_hospital_registration (username,age,sex,ks,tel,cont,yul) VALUES ( '$username',$age,$sex,'$ks','$tel','$cont',$yul)";
		
		//print_r($addsql);
		
		$result_add=$db->query($addsql);
		//print_r($result_add);
		if($result_add){ 
			$get_username=" SELECT id FROM sclq_hospital_registration  where username='$username'";
			$result_get=$db->query($get_username);
			$row_get= mysql_fetch_array($result_get);
			$hospital_num=$row_get['id'];
			$info = array("hospital_num"=>$hospital_num,"username"=>$username,"age"=>$age,"sex"=>$sex,"tel"=>$tel,"ks"=>$ks,"cont"=>$cont,"yul"=>$yul);
			$json_info = base64_encode((json_encode($info))); 
			//print_r($json_info);
			echo "<script>alert('挂号成功!');window.location.href='hospital_num.php?id=".$json_info."';</script>";		       
			}
		//else{echo '<script language="javascript">操作失败</script>';}
	}
	
 
	

?>