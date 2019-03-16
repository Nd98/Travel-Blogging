<?php
    require('../controllers/registerController.php');
    if($_POST!=null){
        if(!registerUser()){
            $_SESSION['error'] = "Some error occured";
            header('Location: ../signup.php');
        }
        else{
            header('Location: ../index.php');
        }
    }

    else{
        $_SESSION['error'] = "This page only accepts post requests";
        header('Location: error.php');
    }
     
?>