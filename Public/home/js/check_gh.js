 $(function(){     
	        
				/*判断患者姓名是否为空给出提示信息*/	
						
				
				$("#uname").focus(function(){
					
					if($(this).val() == this.defaultValue){
							$("#uname").val('');
					}
					
				});
				$("#uname").blur(function(){
					if($(this).val()== ''){
						   $("#uname").val(this.defaultValue);
						   $("strong#usermsg").addClass("errorMsg");
						   $("strong#usermsg").text("姓名格式不正确");
					}
					else{
						   $("strong#usermsg").removeClass("errorMsg");
						   $("strong#usermsg").hide();
					}
					
				});
				
				/*用正则判断用户提交手机或电话号码是否合法*/
				$("#tel").focus(function(tel){
					
					if($(this).val() == this.defaultValue){
							$("#tel").val('');

					}
					

				});
				var isMoble = /^(1(([35][0-9])|(47)|[8][01236789]))\d{8}$/; 
				var istel = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/;
				//var  tel   = $("#tel").val();
				$("#tel").blur(function(){
					if($(this).val()== ''){
						   $("#tel").val(this.defaultValue);
						   //tel.preventDefault();
						   //$("#sub").attr("disabled",true);
						   $("strong#telmsg").addClass("errorMsg");
						   $("strong#telmsg").text("请填写正确的手机或电话号码");

					}
					else{
						
					
					
						if((isMoble.exec($("#tel").val())) ||(istel.exec($("#tel").val()))){
							  //$("#sub").attr("disabled",false);
								$("strong#telmsg").removeClass("errorMsg");
								 $("strong#telmsg").hide();			 
						  }
						else{
							     $("strong#telmsg").show();	
								 $("strong#telmsg").addClass("errorMsg");
								 $("strong#telmsg").text("请填写正确的手机或电话号码");		
							}
					}

					
				});	
				
				/*判断年纪为整数合法不合法都无所谓*/
				
				
				/*ajax提交*/
				$("#sub").click(function(){
				if($(".errorMsg").length>0||$("#uname").val()=='请输入您的姓名'||$("#tel").val()=="请输入手机或电话号码")
				{
					alert('表单填写有错误');
				}
				
			});

				    
	});	

 	
	   



	   
		