<?php
   
   if(isset($_POST['submit'])){
      $id= $_POST['id'];
      $price= $_POST['price'];
      $name=$_POST['name'];
      $category=$_POST['category'];
      $description=$_POST['description'];
      
      $con=mysqli_connect("localhost","root","","auctionbits");
      
      if(!$con)die("failed");

      $mysql="INSERT INTO product(id,price,name,category,description)";
      $mysql.="VALUES('$id','$price','$name','$category','$description')";
      
      $res=mysqli_query($con,$mysql);

      if($res)header("location:view_product.php");
      else echo "failed";
   
    }
   
   

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
        
        <form action="add_product.php" method="post">
            <div style ="front-size:40px; margin: 10px; ">PRODUCT DETAILS</div><br><br>
            <div>prodcut Id</div>
            <input type="text" name="id" required><br><br>
             <div>Price</div>
            <input type="text" name="price"required><br><br>
            <div>Name</div>
            <input type="text" name="name" required><br><br>
            <div>Category</div>
            <input type="text" name="category" required><br><br>
            <div>Description</div>
            <input type ="text" name="description"><br><br>
            <input type ="submit" value="Add" name="submit"><br><br>

            
        </form> 
    </div>   
             

</div>

        



    
    
</body>
</html>