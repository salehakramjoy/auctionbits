<?php
  
   session_start();
   unset($_SESSION['user_id']);
   header("location: /login/login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>

     <h3>logout successfull</h3>

     <a href="login.php">Login</a>
    
</body>
</html>