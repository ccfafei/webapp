// JavaScript Document
$(function(){
    
    
    
    $("#Fpassword").blur(function(){
    	//alert('111');
    	var passwordData = $(this).val();
    	//alert(passwordData);
    	 
    	$.post(checkPasswordURL,{"Fpassword":passwordData},function(msg){
       
        	if(msg.status==0){
        		
        		$("#Fpassword").addClass("error");
        		$("#Fpassword").focus();
        		alert('输入密码和原始密码不一致');
        		
        	}
        	else{
        		$("#Fpassword").removeClass("error");
        	}
        },"json");
    	
    }); 
    $("#passwordnew2").blur(function(){
    	var p1  =  $("#passwordnew").val();
    	var p2  =  $("#passwordnew2").val();
    	if(p2!=p1){
    		$("#passwordnew2").addClass("error");
    		$("#passwordnew2").focus();
    		alert('重复密码和新密码不一致');
    	}
    	else{
    		$("#passwordnew2").removeClass("error");
    	}
    });
    
       $("#sub").click(function(){
    	  if($(".error").size()>0){
    		  alert('表单填写错误');
    	  }
    	  else{
    		  $(this).onsubmit();
    	  }
       });
});