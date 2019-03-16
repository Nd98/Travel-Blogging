<?php
    require('../controllers/loginController.php');
    if($_POST!=null){
        if(!loginUser()){
            $_SESSION['error'] = "Username or Password didn't match";
            header('Location: ../login.php');
        }
        else{
            header('Location:../index.php');
        }
    }

    else{
        $_SESSION['error'] = "This page only accepts post requests";
        header('Location: error.php');
    }
     
?>