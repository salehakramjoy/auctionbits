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
    <title>AuctionBits signup</title>
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
        
        <form action="functions.php" method="post">
            <div style ="front-size:40px; margin: 10px; ">SIGN UP</div><br><br>
            <div>User Name</div>
            <input type="text" name="username" required><br><br>
             <div>Password</div>
            <input type="password" name="password"required><br><br>
            <div>Mail id</div>
            <input type="email" name="Mailid" required><br><br>
            <div>Address</div>
            <input type="text" name="Address" required><br><br>
            <input type ="submit" value="Register" name="submit"><br><br>
            

            <a href="login.php">click here to login</a><br><br>
        </form> 
    </div>   
             

</div>

        



    
    
</body>
</html>