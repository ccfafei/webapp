
$(function(){

	$(".level1").click(function(){
		var inputs = $(this).parents('.actionadd').find('input');
		$(this).attr("checked")?inputs.attr("checked","checked"):inputs.removeAttr("checked","checked");
	});	
	$(".level2").click(function(){
		
		var inputs = $(this).parents('.action').find('input');
		$(this).attr("checked")?inputs.attr("checked","checked"):inputs.removeAttr("checked","checked");
		$(this).attr("checked")?$(".level1").attr("checked","checked"):$(".level1").removeAttr("checked","checked");
	});	
	
	

	$(".level3").click(function(){
		//alert($(".level3:checked").size());
		if(($(".level3:checked").size())>0){
			$(this).parent().siblings().children('.level2').attr("checked","checked");
			$($(this).parent().parent().parent().children()).children(".level1").attr("checked","checked");
		}
		else{
			$(this).parent().siblings().children('.level2').removeAttr("checked","checked");
			$($(this).parent().parent().parent().children()).children(".level1").removeAttr("checked","checked");
		}
	});	
	
});
