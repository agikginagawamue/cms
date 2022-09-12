<?php 
  $localhost = "localhost";
  $username = "root";
  $password = "";
  $database = "cms_db";

    $con = mysqli_connect($localhost, $username, $password, $database);
    if (mysqli_error($con)) {
        echo 'not connected';
      }
?>