$(document).ready(function(){
    
    //初始化materializecss框架
    $('input#userName#password').characterCounter();
    
    //用户登陆
    $("#loginButton").click(function(){
        var userName = $("#userName").val();
        var password = $("#password").val();
        //js&php通信
        $.ajax({
            type: 'POST',
/*             dataType:'json', */
            url: '../php/index.php?action=login',
            data:{name:userName,pswd:password},
            cache: false,
            success: function(response){
                console.log(response);
            },
            error: function (msg) {
                alert('3');
            }	
        });
        
    });
  
})