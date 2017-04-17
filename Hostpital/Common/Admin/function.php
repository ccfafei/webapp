<?php
	
		function Node_merge($Node,$access=null,$pid=0){
			$arr = array();
			foreach ($Node as $v){
				if(is_array($access)){
					$v['access'] = in_array($v['id'],$access)?1:0;
				}
				if($v['pid'] == $pid){
					$v['child'] = Node_merge($Node,$access,$v['id']);
					$arr[] = $v;
				}
			}
			return $arr;
		}

?>