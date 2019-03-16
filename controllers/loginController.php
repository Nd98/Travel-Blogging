<?php 
include_once('../database/connection.php');
session_start();

function loginUser(){
    global $con;
    $isLoggedin = false;
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "select * from `user_details` where (email='".$user."' OR username='".$user."') AND password='".$password."' LIMIT 1";

    $result = getData($sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $isLoggedin = true; 
    }

    return $isLoggedin;
    
}
    
?>