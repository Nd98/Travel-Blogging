<?php 
	$host="localhost:3306";
    $user="root";
    $password="";
    $db="travel-blogging";

    $con = mysqli_connect($host,$user,$password);

    if (mysqli_connect_errno())
      {

          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    mysqli_select_db($con,$db);

    function getUser($sql){
      global $con;
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);

      return $row;

    }

    function setUser($sql){
      global $con;
      return mysqli_query($con,$sql);
      
    }
?>