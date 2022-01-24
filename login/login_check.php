<?php
include("connection.php");


//$user_data=check_login($con);


     
 
    $name = $_POST['username'];
    $password = $_POST['password'];

    $query="select * from user where name ='$name' and password=$password";
    $result=mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($result);

    if($rowcount==1){
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['user_id'] = $result->fetch_row()[0];
        header("location:demo.html");
    }else{
        die("username or password didn't match");
    }
?>