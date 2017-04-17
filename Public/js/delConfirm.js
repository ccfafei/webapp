function delConfirm(id){ 
	
	var msg = "您真的确定要删除吗？请确认！";  
    if (confirm(msg)==true){ 
    	 //var delURL=delURL+"/uid/"+id+"/";
    	
    	 $.post(delURL,{"uid":id},function(msg){
    		 if(msg.status=="1")
    			alert(msg.info);
    			window.location=userinfoURL; 
    		 	
    			 
		 });
    	
    }  
   
  }
