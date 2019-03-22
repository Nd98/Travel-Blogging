<?php 
	$host="localhost:3306";
    $user="root";
    $password="";
    $db="travel blog";

    $con = mysqli_connect($host,$user,$password);

    if (mysqli_connect_errno())
      {

          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    mysqli_select_db($con,$db);

    function getData($sql){
      global $con;
      $result = mysqli_query($con,$sql);
      return $result;

    }

    function setData($sql){
      global $con;
      return mysqli_query($con,$sql);
      
    }
?>