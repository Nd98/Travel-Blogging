<?php 
    session_start();
    include ('../controllers/blogController.php');
    if(isset($_POST['id'])){


       $data[0] = $_POST['id'];
       $data[1] = $_SESSION['username'];
       $data[2] = $_POST['title'];
       $data[3] = $_POST['excerpt'];
       $data[4] = $_POST['content'];
       $data[5] = $_POST['tags'];

        $isupdated = updateBlog($data);
    }

    header("Location: manage posts.php");


?>