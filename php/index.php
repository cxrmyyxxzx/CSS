<?php  
    //处理登陆请求
    if($_GET['action']=='login'){
        $username = $_POST['name'];  
        $password = $_POST['pswd'];
        //包含数据库连接文件  
        include('conn.php');  
        //检测用户名及密码是否正确  
        $check_query = mysql_query("select userName from user where userName='$username' and password='$password' limit 1"); 
        //登录成功
        if($result = mysql_fetch_array($check_query)){  
            //存储session
            session_start();  
            $_SESSION['username'] = $username;
            echo json_encode(array('status' => 0)); 
            exit;  
        } else {
            echo json_encode(array('status' => 1));
            exit; 
        }  
    }
?>