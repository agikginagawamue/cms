<?php 

  $localhost = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'database_project';

  $connection = mysqli_connect($localhost, $user, $password, $database);

  if (mysqli_error($connection)) {
    echo 'not connected';
  }