/*添加用户效果*
* @athor:afei
* @date:2013-07-15
*/ 

$(function(){
	
    /*此功能是在提交前核查用户名和密码是否合法。
     *暂时支持用户名和密码是否为空，用户名是否在数据库中存在
     **/
	
	$("input").blur(function(){
		if($(this).is(".adduser")){
			if($(".adduser").val()==""){
				$("#usererror").removeClass('right');
				$("#usererror").addClass('wrong');
				$("#usererror").html("用户名不能为空!");
			}
			else{
			    $.post(checknameURL,{"addname":($(".adduser").val())},function(msg){
			    	 if(msg.status==1){
			    		 $("#usererror").removeClass('wrong');
						 $("#usererror").addClass('right');
						 $("#usererror").html(msg.info+" ").show();
						
			    	 }
			    	 else{
						 $("#usererror").removeClass('right');
						 $("#usererror").addClass('wrong');
						 $("#usererror").html(msg.info);
			    	 }
			    });
			}
		}
				
		if($(this).is(".addpwd")){
			if($(".addpwd").val()==""){
				$("#pwderror").removeClass('right');
				$("#pwderror").addClass('wrong');
				$("#pwderror").html("密码不能为空!");
			}
			else{
				$("#pwderror").removeClass('wrong');
				$("#pwderror").addClass('right');
				$("#pwderror").html(" ");
			}
			
		}
		
		
		if($(this).is(".checkpwd")){
			if($(".checkpwd").val()!=$(".addpwd").val()){
				$("#checkerror").removeClass('right');
				$("#checkerror").addClass('wrong');
				$("#checkerror").html("重复密码和密码不一致");
			}
			else{
				$("#checkerror").removeClass('wrong');
				$("#checkerror").addClass('right');
				$("#checkerror").html(" ");
			}
			
		}
		
		
		
		
		if($(this).is(".addmail")){
			var mail = $(".addmail").val();
			var reg=/^[a-zA-Z]([a-zA-Z0-9]*[-_.]?[a-zA-Z0-9]+)+@([\w-]+\.)+[a-zA-Z]{2,}$/;
			if(!reg.test(mail)){
				$("#mailerror").removeClass('right');
				$("#mailerror").addClass('wrong');
				$("#mailerror").html("你输入的邮箱格式不正确!");
			}
			else{
				$("#mailerror").removeClass('wrong');
				$("#mailrror").addClass('right');
				$("#mailerror").html(" ");
			}
			
		}
		
	});

	//});
	
	/*下面的功能主要是提交处理*/
	
	var UseraddURL	=	$(".addurl").val();
	$(".addsub").click(function(){
		//alert(UseraddURL);
		if($("strong.wrong").length>0||$(".addpwd").val()==""||$(".adduser").val()==""){
			alert("表单填写有误");
		}
		else{
			 var inputData = {"adduser":($(".adduser").val()),"addname":$(".addname").val(),"addpwd":($(".addpwd").val()),"addmail":($(".addmail").val()),"addlevel":$(".lop option:selected").val(),"addstatus":$(".uop option:selected").val()};
			 //alert(inputData.addname+inputData.addpwd+inputData.addage);
			 $.post(UseraddURL,inputData,function(msg){
				 alert(msg.info);
				 window.location.href=userURL;
			 });
		}
		
	});
	
               			
});	

 	
	   



	   
		