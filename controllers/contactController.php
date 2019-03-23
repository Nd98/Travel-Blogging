<?php 
    include('blogController.php');

    function setContact($data){
        $name = $data[0];
        $email = $data[1];
        $subject = $data[2];
        $message = $data[3];

        $query = "INSERT INTO `contact_details`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

        $isExecuted = setData($query);

        return $isExecuted;
    }
?>