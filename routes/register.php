<?php
    require('../controllers/registerController.php');
    if(isset($_POST)){
        if(!registerUser()){
            $_GET['error'] = "Some error occured";
            header('Location: ../signup.php');
        }
        else{
            header('Location: ../index.php');
        }
    }

    else{
        $_GET['error'] = "This page only accepts post requests";
        header('Location: error.php');
    }
     
?>