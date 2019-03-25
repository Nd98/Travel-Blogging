<?php 
    include('../controllers/photoController.php');
    if(isset($_GET['id'])){
        $isdeleted = deletePhotos($_GET['id']);
    }

    header("Location: manage photos.php");


?>