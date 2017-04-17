

$(function(){
/*
	 +-------------------------------------- 
	 * 此实例主要禁用帐号，ajax修改数据。
	 * @disable      获取按钮class jquery对象
	---------
	 * */
	$(".disable").click(function(){


	}
	/*
	 +-------------------------------------- 
	 * 此实例主要处理按钮修改时，文本变成文本框的形式，ajax修改数据。
	 * @modInput      获取按钮class jquery对象
	 * @iv            获取stong的class jquery对象
	 * @data          iv对象的长度
	 *+--------------------------------------
	 * */
	 
    $(".modInput").hide();
    $(".pwd").hide();
	var iv = $(".iv");
	//var data=iv.size();
	var modInput=$(".modInput");
   	$(".modbtn").click(function(){
		
   		//$(this).closest("tr").css("backgroundColor","red");
		if($(this).text() == "修改"){ 
			$(this).text("保存");//当点修改时按钮属性值改变
			$(this).closest("tr").children().find("input").show();	//将当前行中所有input表单显示
			var mod		= 	$(this).closest("tr").children().find("input[class='modInput']");
			var siv  	= 	$(this).closest("tr").children().find("strong[class='iv']");
			
			var tablen	=	$("table").attr("width");
			//alert(siv.size());
		   for(var i=0;i<mod.size();i++){
			   $(mod[i]).attr("value",$(siv[i]).text());
			   //alert( ($(mod[i]).parent().attr("width")));
			   //alert( parseFloat($(mod[i]).parent().attr("width")));
			   $(mod[i]).css("width",(parseInt($(mod[i]).parent().attr("width"))*parseInt(tablen))*0.01+"px");
		   }
		   $(this).closest("tr").children().find("strong[class='iv']").remove();//将当前strong元素所有内容隐藏
			
		}
		else{
			
		/**
		 +--------------------------------------------
		 *将当前行所有的数据获取出来
		 *@id       用户uid
		 *@uname    用户username
		 *@pwd      用户password
		 *@age      用户的年龄
         +--------------------------------------------
		**/       
		    var uid 		= $(this).closest("tr").children().find("input[id='sid']").val();
		    var realname	= $(this).closest("tr").children().find("input[id='realname']").val();
			//var sex			= $(this).closest("tr").children().find("input[id='sex']").val();
			//var age			= $(this).closest("tr").children().find("input[id='age']").val();
			//var inputdata = "uid="+uid+"&username="+uname+"&password="+pwd+"&age="+age;
			var inputdata = {"uid":uid,"realname":realname}; 
			//alert(inputdata.uid);			
			$.post(modifyURL,inputdata,function(data){
	                 alert(data.info); 
	                 window.location.reload();
	             },"json");
		  	$(".modbtn").text("修改");
			
			$(modInput).each(function(i){
				 $(iv[i]).text($(this).val());
			});
			
			 $(".modInput").hide();
             $(".iv").show();
             
            // window.location.href="http://test.myapp.com/index.php/Index/modifyUser/uid/"+id+"/uname/"+uname+"/pwd/"+pwd+"/age/"+age;
           
		}
	
	});
   
   });
