<?php
//   session_start();
//    include("connection.php");
//    include("functions.php");


//    $user_data=check_login($con);
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuctionBits Login</title>
</head>
<body>
    
  
    <style type="text/css">
    #text{

    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
    }

    #button{

    padding: 10px;
    width: 100px;
    color: white;
    background-color: lightblue;
    border: none;
    }

    #box{

    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
    }

    </style>

    <div id="box">
        
        <form method="post"action="login_check.php">
            <div style ="front-size:20px; margin: 10px; ">login</div>
            <div>User Name</div>
            <input type="text" name="username" required><br><br>
             <div>Password</div>
            <input type="password" name="password"required><br><br>
            <input type ="submit" value="Login"name ='submit'><br><br>
            
            <a href="login/logout.php">click here to logout</a><br><br>
            <a href="login/signup.php">click here to signup</a><br><br>
        </form> 
    </div>   
             

</div>

        



    
    
</body>
</html>

