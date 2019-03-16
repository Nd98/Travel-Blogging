<?php 
include_once('../database/connection.php');
session_start();

function registerUser(){
    global $con;
    $isRegistered = false;
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "INSERT INTO `user_details`(`username`, `email`, `password`) VALUES('".$user."','".$email."','".$password."')";

    $isRegistered = setData($sql);

    if($isRegistered){
        $_SESSION['username'] = $user;
    }

    return $isRegistered;
    
}
    
?>