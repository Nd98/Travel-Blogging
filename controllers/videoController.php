<?php 
    include('database/connection.php');

    function getVideos(){
        
        $sql = "select * from blog_videos";

        $result = getData($sql);

        return $result;
    }

    function getVideosByCategory($category){
        $sql = "select * from blog_videos where `video_category`='.$category.'";

        $result = getData($sql);

        return $result;
    }

    function insertVideos($data){
        $id = $data[0];
        $username = $data[1];
        $video_path = $data[2];
        $video_category = $data[3];
        $video_name = $data[4];
        $tags = $data[5];

        $sql = "INSERT INTO `blog_videos`(`username`, `video_path`, `video_name`, `video_category`, `tags`) VALUES ('.$username.','.$video_path.','.$video_name.','.$video_category.','.$tags.')";

        $isExecuted = setData($sql);

       if($isExecuted){
           //store the image-file;

       }

       return $isExecuted;
    }

    function deleteVideos($id){
        $sql = "Delete from blog_videos where id = '.$id.'";

        $isExecuted = setData($sql);

        return $isExecuted;
    }
?>