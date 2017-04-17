<?php 
	function  P($str){
		echo '<pre>';
		dump($str);
	}
	
	function var_format($str){
		if(!get_magic_quotes_gpc())
		{
			return addslashes(trim($str));
		}
		else{
			return trim($str);
		}
	}
?>