<?php
    require('../controllers/loginController.php');
    if(isset($_POST)){
        if(!loginUser()){
            $_GET['error'] = "Username or Password didn't match";
            header('Location: ../login.php');
        }
        else{
            header('Location:../index.php');
        }
    }

    else{
        $_GET['error'] = "This page only accepts post requests";
        header('Location: error.php');
    }
     
?>