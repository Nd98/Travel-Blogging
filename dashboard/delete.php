<?php 
    include ('../controllers/blogController.php');
    if(isset($_GET['id'])){
        $isdeleted = deleteBlog($_GET['id']);
    }

    header("Location: manage posts.php");


?>