<?php 
    include('database/connection.php');

    function getPhotos(){
        
        $sql = "select * from blog_photos";

        $result = getData($sql);

        return $result;
    }

    function getPhotosByCategory($category){
        $sql = "select * from blog_photos where `image_category`='.$category.'";

        $result = getData($sql);
        
        return $result;
    }

    function insertPhotos($data){
        $id = $data[0];
        $username = $data[1];
        $image_path = $data[2];
        $image_category = $data[3];
        $image_name = $data[4];
        $tags = $data[5];

        $sql = "INSERT INTO `blog_photos`(`username`, `image_path`, `image_category`, `image_name`, `tags`) VALUES ('.$username.','.$image_path.','.$image_category.','.$image_name.','.$tags.')";

        $isExecuted = setData($sql);

       if($isExecuted){
           //store the image-file;

       }

       return $isExecuted;
    }

    function deletePhotos($id){
        $sql = "Delete from blog_photos where id = '.$id.'";

        $isExecuted = setData($sql);

        return $isExecuted;
    }
?>