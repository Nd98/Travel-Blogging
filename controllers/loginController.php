<?php 
include_once('../database/connection.php');

function loginUser(){
    global $con;
    $isLoggedin = false;
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "select * from `user_details` where (email='".$user."' OR username='".$user."') AND password='".$password."'";

    $row = getUser($sql);

    if($row.count > 0){
        $_SESSION['username'] = $row['username'];
        $isLoggedin = true; 
    }

    return $isLoggedin;
    
}
    
?>