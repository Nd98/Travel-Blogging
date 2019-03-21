<?php 
    @include('database/connection.php');

    function getComments($post_id){

        $sql = "select * from post_comments where post_id = '.$post_id.'";

            $result = getData($sql);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                return $row;
            }

        return 0;
    }

    function getCommentsByUserId($username){

        $sql = 'select * from post_comments where username = "'.$username.'"';
        
        $result = getData($sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
            // $row = mysqli_fetch_assoc($result);
            // return $row;
        }

        return 0;
    }

    function insertComments($data){
       $id = $data[0];
       $username = $data[1];
       $post_id = $data[2];
       $comment = $data[3];

       $sql = "INSERT INTO `post_comments`(`username`, `post_id`, `comment`) VALUES ('.$username.','.$post_id.','.$comment.')";

       $isExecuted = setData($sql);

       if($isExecuted){
           //store the image-file;

       }

       return $isExecuted;
    }
?>