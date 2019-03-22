<?php 
    @include('../database/connection.php');
    @include('database/connection.php');

    function getAllBlogs(){
        $sql = "select * from blog_posts";

        $result = getData($sql);

        return $result;

    }

    function getBlogById($id){
        $sql = 'select * from blog_posts where id="'.$id.'"';

        $result = getData($sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            
            return $row;
        }
    }
    function getBlogsLimit($limit){
        $sql = "select * from blog_posts LIMIT $limit";

        $result = getData($sql);

        return $result;
    }

    function getUserBlogs($username){
        $sql = 'select * from blog_posts where username = "'.$username.'"';
        
        $result = getData($sql);

        return $result;
    }

    function getPopularPosts(){
        $sql = "select * from blog_posts LIMIT 3";

        $result = getData($sql);

        return $result;
    }

    function getPopularAuthors(){
        $sql = "SELECT count(id) as id,username from blog_posts GROUP BY username LIMIT 3";

        $result = getData($sql);

        return $result;
    }

    function getPopularCategories(){

        // query pending;
        $sql = "SELECT count('id'),'username' FROM `blog_posts` ORDER BY 'id' DESC LIMIT 3 ";

        $result = getData($sql);

        return $result;
    }


    function deleteBlog($id){
        $sql = "Delete from blog_posts where id = $id";

        $isExecuted = setData($sql);

        return $isExecuted;
    }

    function updateBlog($data){
       $id = $data[0];
       $username = $data[1];
       $title = $data[2];
       $excerpt = $data[3];
       $content = $data[4];
       $tags = $data[5];

       $sql = "UPDATE `blog_posts` SET `title`= '$title',`excerpt`= '$excerpt',`content`= '$content',`tags`= '$tags' WHERE `username`='$username' AND `id` = '$id'";

       $isExecuted = setData($sql);

       if($isExecuted){
           //store the image-file;
       }

       return $isExecuted;
    }

    

    function insertBlog($data){
       $id = $data[0];
       $username = $data[1];
       $title = $data[2];
       $creation_date = $data[3];
       $excerpt = $data[4];
       $content = $data[5];
       $header_image = $data[6];
       $tags = $data[7];
       $tmp_img_name = $data[8];

       $sql = "INSERT INTO `blog_posts`(`username`, `title`, `creation_date`, `excerpt`, `content`, `header_image`, `tags`) VALUES ('$username','$title','$creation_date','$excerpt','$content','$header_image','$tags')";

       $isExecuted = setData($sql);

       if($isExecuted){

           move_uploaded_file($tmp_img_name,'../'.$header_image);
       }

       return $isExecuted;
    }

?>