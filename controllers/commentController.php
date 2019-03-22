<?php 
    include('blogController.php');

    function getAllComments(){
        $sql = "select * from post_comments";

        $result = getData($sql);

        return $result;
    }

    function getComments($post_id){

        $sql = "select * from post_comments where post_id = '.$post_id.'";

        $result = getData($sql);

        return $result;
    }

    function getCommentsByUserId($username){

        $sql = 'select * from post_comments where username = "'.$username.'"';
        
        $result = getData($sql);

        return $result;
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

    function deleteComment($id){
        $sql = 'Delete from post_comments where id = "'.$id.'"';
        echo $sql;

        $isExecuted = setData($sql);

        return $isExecuted;
    }
?>