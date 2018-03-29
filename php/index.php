<?php  
    if($_GET['action']=='login'){
    $username = $_POST['name'];  
    $password = $_POST['pswd'];
    //包含数据库连接文件  
    include('conn.php');  
    //检测用户名及密码是否正确  
    $check_query = mysql_query("select userName from user where userName='$username' and password='$password' limit 1");     
    if($result = mysql_fetch_array($check_query)){  
    //登录成功  
/*     session_start();  
    $_SESSION['username'] = $username; */ 
    $array = array();
    $array['status'] = 'success';
    echo json_encode($array); 
    exit;  
} else {
    $array = array();
    $array['status'] = 'fail';
    echo json_encode($array); 
    exit; 
}  
   } 
  
?>