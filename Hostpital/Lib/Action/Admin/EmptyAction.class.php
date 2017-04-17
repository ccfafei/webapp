<?php
    class EmptyAction extends Action{
    function _empty(){ 
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码 
		header("Content-Type:text/html;charset=utf-8");	
        $this->redirect('Public/404');
    }      
 }
