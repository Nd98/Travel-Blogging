<?php 
include_once('../database/connection.php');

function registerUser(){
    global $con;
    $isRegistered = false;
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "INSERT INTO `user_details`(`username`, `email`, `password`) VALUES('".$user."','".$email."','".$password."')";

    $isRegistered = setUser($sql);

    return $isRegistered;
    
}
    
?>