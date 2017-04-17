//定义全局变量
var domainName = window.location.href;
var domain = domainName.replace('http://','');
var domainName = domain.split('/')[0];
var domainNameAdmin = domainName + "/Admin";
//翻页跳转页面的JS脚本
function enterHandler(event,url) {
    var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
    if (keyCode == 13) {
        var nextPageUrl=url;
        var togoPage=parseInt(gotoPage.value);
        location.href=nextPageUrl.replace("PAGE",togoPage);
    }
    return false;
}

//删除前确认对话框
function getConfirm() {
    if(!confirm('确实要删除该信息吗')) {
        return false;
    }
}
function getFront(){
        if(!confirm('确实要进行该操作吗')) {
        return false;
    }
}
//用户页面JS效果操作权限
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
function disableselect(e) {
    if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
        return false
}

function reEnable() {
    return true
}

//if (typeof document.onselectstart!="undefined")
//    document.onselectstart=new Function ("return false")
//else
//{
//    document.onmousedown=disableselect
//    document.onmouseup=reEnable
//}

//禁用右键
function stop() {
    return false;
}
//document.oncontextmenu=stop;

//页面表单验证效果
//如果页面上没有表单元素，则不执行下面的程序
if(document.forms[0]) {
    for(n=0; n<formsNum; n++) {
        //将表单中的必填项目加上背景色
        for (i=0;i<document.forms[0].length;i++) {
            if('必填项' == document.forms[0][i].title) {
                document.forms[0][i].className = 'border_color_strong';
            }
        }
    }
}

//检查表单中的必填项目
function checkForm(form_name) {
    var obj_form = document.forms[form_name];
    var formNum = obj_form.length;
    //遍历表单
    for (var i=0;i<formNum;i++) {
        if('必填项' == obj_form[i].title && obj_form[i].value == '') {
            //表单名
            var formName = obj_form[i].name;
            //标题名
            var titleName = formName + '_title';
            //提示信息
            var message = '“' + document.getElementById(titleName).innerText + '”不能为空';
            alert(message);
            return false;
        }
    }
}

//取SELECT的值
function getSelect(selectID) {
    var select = document.getElementById(selectID);
    var index = select.selectedIndex;
    var text = select.options[index].text;
    var value = select.options[index].value;
    return value;
}

//取SELECT的文本
function getSelectText(selectID) {
    var select = document.getElementById(selectID);
    var index = select.selectedIndex;
    var text = select.options[index].text;
    return text;
}

//取下级------------------------------------------------------------------------
function getNextCategory(pid, level, pids, self_id){
    switch(level) {
        case 2:
            $('#category2').html('');
            $('#category3').html('');
            break;
        case 3:
            $('#category3').html('');
            break;
    }
    if(pid == 0 || level >3) {
        return false;
    }
    $.post('http://' + domainNameAdmin + '/www/index.php?F=getNextCategory', {
        pid : pid,        
        level : level,        
        pids : pids,
        selfId : self_id
    }, function(data){
        var id_name = "#category" + level;
        $(id_name).html(data);
    });
    return true;
}

//复选框全选---------------------------------------------------------------------
function selectAll(checkbox_name){
    var checks = $("input[name='" + checkbox_name + "']");
    for(i=0;i<checks.length;i++) {
        checks[i].checked = true;
    }
}

//反选--------------------------------------------------------------------------
function invertSelection(checkbox_name) {
    var checks = $("input[name='" + checkbox_name + "']");
    for(i=0;i<checks.length;i++) {
        if(checks[i].checked == true){
            checks[i].checked = false;
        } else {
            checks[i].checked = true;
        }
    }
}
//删除选中的挂号列表选项-----------------------------------------------------------------
function deleteGua(checkbox_name) {
    var checks = $("input[name='" + checkbox_name + "']");
    var id_str = '';
    for(i=0;i<checks.length;i++) {
        if(checks[i].checked == true){
            id_str += checks[i].value + '|';
        }
    }
    if(id_str == '') {
        alert('对不起，请先选择要删除内容');
        return false;
    } else {
    	   var delURL='http://' + domainNameAdmin+"/Guahao/deletePatient/id_str/"+id_str; 
    	   //alert(delURL);
	       window.location.href = delURL;	
    	   
    	 }
}



//删除选中的日志-----------------------------------------------------------------
function deleteLog(checkbox_name) {
    var checks = $("input[name='" + checkbox_name + "']");
    var id_str = '';
    for(i=0;i<checks.length;i++) {
        if(checks[i].checked == true){
            id_str += checks[i].value + ',';
        }
    }
    if(id_str == '') {
        alert('对不起，请先选择要删除的日志');
        return false;
    } else {
        window.location.href = 'http://' + domainNameAdmin + '/system/index.php?F=logInfo&way=D&ids=' + id_str;
    }
}

//AJAX获取消息条数-----------------------------------------------------------------
function userMsg() {
    $.post('http://' + domainNameAdmin + '/line/index.php?F=userOnLine',function(data){
         $("#usermsg").html(data);
    })
}

//搜索提交传值 -----------------------------------------------------------------
function search(str,v){
	 var url=searchURL1+"/"+str+"/"+v;
	 //alert(url);
	 window.location.href=url;
}