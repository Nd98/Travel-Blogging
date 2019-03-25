<?php 
    include('../database/connection.php');

    function getPhotos(){
        
        $sql = "select * from blog_photos";

        $result = getData($sql);

        return $result;
    }

    function getPhotosByCategory($category){
        $sql = "select * from blog_photos where `image_category`='$category'";

        $result = getData($sql);
        
        return $result;
    }

    function insertPhotos($data){
        $id = $data[0];
        $username = $data[1];
        $image_path = $data[2];
        $image_category = $data[3];
        $image_temp= $data[4];
        

        $sql = "INSERT INTO `blog_photos`(`username`, `image_path`, `image_category`) VALUES ('$username','$image_path','$image_category')";

        $isExecuted = setData($sql);

       if($isExecuted){
           //store the image-file;
           move_uploaded_file($image_temp,"../".$image_path);


       }

       return $isExecuted;
    }

    function deletePhotos($id){
        $sql = "Delete from blog_photos where id = '$id'";

        $isExecuted = setData($sql);

        return $isExecuted;
    }
?>