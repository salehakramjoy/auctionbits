
<?php
  
     
  if(isset($_POST['submit'])){
   
   
   $product_id= $_POST['id'];
   $comment= $_POST['comment'];
   $rating= $_POST['rating'];
 
   
   $con=mysqli_connect("localhost","root","","auctionbits");
     
   if(!$con)die("failed");

   $mysql="INSERT INTO review(rating,comment,product_id)";
   $mysql.="VALUES('$rating','$comment','$product_id')";
   
   $res=mysqli_query($con,$mysql);

   if($res)header("location:reviewform.php");
   else echo "failed";

 }

  

?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
   <title>Review Products</title>
</head>

<style>
   .product {
   /* Add shadows to create the "card" effect */
     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
     transition: 0.3s;
     padding : 5px;
   }

   /* On mouse-over, add a deeper shadow */
   .product:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   }

   /* Add some padding inside the card container */
   .product-info {
   padding: 2px 16px;
   display: flex;
   flex-direction : column;
   justify-content:center;
   align-items : center;
   }
   .product-image {
       width : 200px;
       height : 200px;
   }
   .books-container {
       display: flex;
       flex-wrap : wrap;
       gap : 50px;
   }
   .product-name {
       font-size : 22px;
       color : #00ace0;
   }

   /* The side navigation menu */
.sidebar {
 margin: 0;
 padding-right:20px;
 padding: 0;
 width: 200px;
 background-color: #cef5d9;
 position: fixed;
 height: 100%;
 overflow: auto;
}

/* Sidebar links */
.sidebar a {
 display: block;
 color: black;
 padding: 16px;
 text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
 background-color: #964B00;
 color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
 background-color: #555;
 color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
 margin-left: 200px;
 padding: 1px 16px;
 height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
 .sidebar {
   width: 100%;
   height: auto;
   position: relative;
 }
 .sidebar a {float: left;}
 div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
 .sidebar a {
   text-align: center;
   float: none;
 }
}

a {
       text-decoration: none;
   }

</style>

<body>
   <div class="sidebar-container">
       <div class="sidebar">
           <a class="active">Review  Products</a>
           
           <a href="../demo.html">home</a>
          
           
           </div>
           <a href="../demo.html">home</a>

           

       </div>
   </div>
   <div class="content">
             <br>
           <tb><tb> <tb> <h3>Review Details </h3></tb></tb></tb>  
           <form method="post"action="reviewcreate.php">
           <div>Product id</div>
           <input type="text" value="<?php echo $id?>" name="product_id" required><br><br>
           <div>Comment</div>
           <input type="text" name="comment" required><br><br>
            <div>Rating</div>
           <input type="text" name="rating"required><br><br>
           <input type ="submit" value="confirm"name ='submit'><br><br>

           <a href="../demo.html">home</a>
           

           
       </form>
   </div>
    <div>
  
       
</div>  
</body>
</html>
