 $(function(){     
	        
				/*用户登录时验证*/	
				
			
				$("#username").blur(function(){
					if($("#username").val() == ''){
					    $("#usermsg").show();
						$("#usermsg").html('您输入的用户名不能为空');
					}
					else{
					    $("#usermsg").hide();
					}
				});	
				$("#password").blur(function(){
					if($("#password").val() == ''){
					    $("#passmsg").show();
						$("#passmsg").html('您输入的密码不能为空!');
					}
					else{
						 $("#passmsg").hide();
					}
				});	
				$("#verify").blur(function(){
					if($("#verify").val() == ''){
					     $("#verifymsg").show();
						$("#verifymsg").html('您输入的验证码不能为空!');
					}	
					else{
					     $("#verifymsg").hide();
					}
				});
				$('.bt').click(function(){
					if($("#username").val()=='' || $("#password").val() == '' || $("#verify").val() == ''){
						alert('所填表单不能为空!');
						return false;
					}
					else{return true;}
               });			
	});	

 	
	   



	   
		