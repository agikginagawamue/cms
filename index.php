<?php 
  require './database/connection.php';

  session_start();
  
  if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $queryLogin = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $sqlLogin = mysqli_query($connection, $queryLogin);
    $r = mysqli_fetch_array($sqlLogin);

    if (mysqli_num_rows($sqlLogin) > 0) {
      $_SESSION['status'] == 'valid';
      $_SESSION['username'] == $r['username'];
      echo header('Location: /database/mainpage.php');
    } else {
      $_SESSION['status'] == 'invalid';
      echo '<script>alert("Wrong username and password")</script>'; 
      echo header('Location: /database/index.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
</head>

<body>
  <form action="#" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>

    <input type="submit" name="login" value="LOGIN">
    <a href="register.php"><input type="button" value="REGISTER"></a>
  </form>
</body>

</html>