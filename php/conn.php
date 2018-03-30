<?php   
    
    $conn = mysql_connect("192.168.38.114","admin","admin") or die("数据库链接错误".mysql_error());  
    mysql_select_db("css",$conn) or die("数据库访问错误".mysql_error());  
    mysql_query("set names gb2312");
    /*  echo 'connect success';  */ 
    
?>