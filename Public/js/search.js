$(function(){
	$(".showlist").hide();
	
	$(".search").keyup(function(){
		
		if($(".search").val()==""){ $(".showlist").hide();}
		else{
			var inputdata ={"username":$(".search").val()};
			//alert(inputdata.username);
			$.post('http://test.myapp.com/Admin/Index/Adsearch',inputdata,function(msg){
		     if(msg.status==1){
		    	  //alert('find');
				   //alert(msg.data);
				  var searchData =$.trim((msg.data).toString());
				  //alert(searchData);
				  var datasum = new Array;
				  datasum =  searchData.split(",");
				  //alert(datasum.length);
				  var maxlen = 6;
				  var len = 0;
				  var len =  datasum.length>6?6: datasum.length;
				  
				   var htmlstr ="";
				  for(var i=0;i<len;i++){      
					  htmlstr =htmlstr+'<li>'+datasum[i]+'</li>';
				   }
				     $(".showlist").html(htmlstr);
				     $("li").addClass("searchli");
					 $(".showlist").show(); 
					 $("li").mousemove(function(){$(this).css("background-color","#CCf");});
					 $("li").mouseout(function(){$(this).css("background-color","#fff");});
					 $("li").click(function(){$(".search").val($(this).text());});
				 
				 
		     }
		     else{
		    	 $(".showlist").hide();
		     }
	           
	        });
	        
		}
	});

	$(".qbtn").click(function(){
	    
		if($(".search").val()==""){
			alert('你输入的关键字不能为空');
		}
		else{
		    $(".before").hide();
			$(".after").show();
			
			window.location.href= searchURL+"/userSeararch/"+$('.search').val();
			
			
		}
		
	});

});