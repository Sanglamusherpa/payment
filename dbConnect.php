<?php 
//connecting to database
$db = new mysqli("localhost","root","","ppal_integration");
//display error if failed to connect
if($db->connect_error){
    print("connect failed:%s\n".$db->connect_error);
    exit();

}