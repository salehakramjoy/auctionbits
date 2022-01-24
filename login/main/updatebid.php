
<?php
    include("view_product.php");
    $con=mysqli_connect("localhost","root","","auctionbits");
    if(!$con)die("failed");


    $rec= $_GET['id'];
    $nprice= $_GET['price'];
  
    
    
    $mysql1="UPDATE product SET price=$nprice WHERE id=$rec";
    
    if($mysql1)echo "success";
    
    
    $res=mysqli_query($con,$mysql1);

    if($res)header("location:view_product.php");
    else echo "failed";
 

   
    
   
   

?>



