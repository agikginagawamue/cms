<?php 
  require './database/connection.php';

  if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $queryRegister = "INSERT INTO users VALUES (null, '$username', '$password')";
    $sqlRegister = mysqli_query($connection, $queryRegister);
    
    echo 'You registered successfully';
    echo header('Location: /database/index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>
</head>

<body>
  <form action="#" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>

    <input type="submit" name="register" value="REGISTER">
  </form>
</body>

</html>