$(document).ready(function(){
    
    //初始化materializecss框架
    $('input#userName#password').characterCounter();
    
    //用户登陆
    $("#loginButton").click(function(){
        var userName = $("#userName").val();
        var password = $("#password").val();
        var loginData = {userName:userName,password:password};
        //js&php通信
        $.ajax({
            type: 'POST',
            dataType:'json',
            url: '../php/index.php',
            data:loginData,
            cache: true,
            success: function(response){
                alert(response);
            },
            error: function (msg) {}	
        });
        
    });
  
})