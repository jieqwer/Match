
$(function () {
//验证用户名

    $("#name").focus(function(){
        $(this).css({"background":"#19C1C3", "color": "#fff"});
        $(this).attr('placeholder','请填写您想用于登录的用户名,格式为英文或中文');
    });

//失去焦点
    $("#name").blur(function(){
        var curValue=$(this).val();
        if(curValue=="")
        {   $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','您没有填写用户名');
            return false;
        }
        else if(!curValue.match(/^[a-zA-Z\u4e00-\u9fa5 ]{1,20}$/)) {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','用户名格式不正确');
        }
        else {
            $(this).css("background","#48f323");
        }
    });

//验证密码

    $("#pwd").focus(function(){
        $(this).css({"background":"#19C1C3", "color": "#fff"});
        $(this).attr('placeholder','密码必须使用大小写英文字母、数字、长度为6~20个字符。');
        if($("#name").val()=="") {
            $("#name").css({"background":"#c32315", "color": "#fff"});
            $("#name").attr('placeholder','您没有填写用户名');
        }
    });
//失去焦点
    $("#pwd").blur(function(){
        var curValue=$(this).val();
        if(curValue=="")
        {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','密码不能为空');
            return false;
        }
        else if(!curValue.match(/^\w{6,20}$/)) {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','密码必须使用大小写英文字母、数字、长度为6~20个字符。');
        }
        else {
            $(this).css("background","#48f323");
        }
    });
//验证确认密码
    $("#repwd").focus(function(){
        if($("#name").val()=="") {
            $("#name").css({"background":"#c32315", "color": "#fff"});
            $("#name").attr('placeholder','您没有填写用户名');
        }
        if($("#pwd").val()=="") {
            $("#pwd").css({"background":"#c32315", "color": "#fff"});
            $("#pwd").attr('placeholder','密码不能为空');
        }
        $(this).css({"background":"#19C1C3", "color": "#fff"});
        $(this).attr('placeholder','确认密码与密码相同');
    });
//失去焦点
    $("#repwd").blur(function(){
        var curValue=$(this).val();
        if(curValue=="")
        {
            $(this).attr('placeholder','确认密码不能为空');
            $(this).css({"background":"#c32315", "color": "#fff"});
            return false;
        }
        else if(curValue!=$("#pwd").val()) {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','确认密码与密码不相同，请重新输入');
        }
        else {
            $(this).css("background","#48f323");
        }
    });
//验证电话号码
    $("#tel").focus(function(){
        if($("#name").val()=="") {
            $("#name").css({"background":"#c32315", "color": "#fff"});
            $("#name").attr('placeholder','您没有填写用户名');
        }
        if($("#pwd").val()=="") {
            $("#pwd").css({"background":"#c32315", "color": "#fff"});
            $("#pwd").attr('placeholder','密码不能为空');
        }
        if($("#repwd").val()=="") {
            $("#repwd").attr('placeholder','确认密码不能为空');
            $("#repwd").css({"background":"#c32315", "color": "#fff"});
        }
        $(this).css({"background":"#19C1C3", "color": "#fff"});
        $(this).attr('placeholder','请填入您的电话号码');
    });
//失去焦点
    $("#tel").blur(function(){
        var curValue=$(this).val();
        if(curValue=="") {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','电话号码不能为空');
            return false;
        }
        else if(!curValue.match( /^1\d{10}$/)) {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','请填写正确的电话号码');
        }
        else {
            $(this).css("background","#48f323");
        }
    });

//验证验证码
    $("#code").focus(function(){
        if($("#name").val()=="") {
            $("#name").css({"background":"#c32315", "color": "#fff"});
            $("#name").attr('placeholder','您没有填写用户名');
        }
        if($("#pwd").val()=="") {
            $("#pwd").css({"background":"#c32315", "color": "#fff"});
            $("#pwd").attr('placeholder','密码不能为空');
        }
        if($("#repwd").val()=="") {
            $("#repwd").attr('placeholder','确认密码不能为空');
            $("#repwd").css({"background":"#c32315", "color": "#fff"});
        }
        if($("#tel").val()=="") {
            $("#tel").attr('placeholder','电话号码不能为空');
            $("#tel").css({"background":"#c32315", "color": "#fff"});
        }
        $(this).css({"background":"#19C1C3", "color": "#fff"});
        $(this).attr('placeholder','请输入验证码');
    });
//失去焦点
    $("#code").blur(function(){
        var curValue=$(this).val();
        if(curValue=="") {
            $(this).css({"background":"#c32315", "color": "#fff"});
            $(this).attr('placeholder','验证码不能为空');
            return false;
        }
        else {
            $(this).css("background","#48f323");
        }
    });


});
