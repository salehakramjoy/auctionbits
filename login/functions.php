<?php
    
    include("connection.php");
    //something was posted
    $name = $_POST['username'];
    $password = $_POST['password'];
    $mail=$_POST['Mailid'];
    $address=$_POST['Address'];
    
    $sql="select * from user where name ='$name'";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);

    if($rowcount>0){
        die("user already taken");
        header("Location:signup.php");
    }else{
        $query = "insert into user (name,mail,address,password) values ('$name','$mail','$address',$password)";
        echo $query;
        mysqli_query($con, $query);

        header("Location: login.php");
    }
       
        
        
        
    


?>