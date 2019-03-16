<?php 
require('../database/controller.php');
    function getAllBlogs(){
        $sql = "select * from blog_posts";

        $result = getData($sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            return $row;
        }

        return 0;

    }

?>