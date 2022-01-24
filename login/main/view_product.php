<?php
   include("../auth.php");
   if(isset($_POST['submit'])){
      $rec= $_POST['id'];
    
      
      $con=mysqli_connect("localhost","root","","auctionbits");
      

      $mysql1="DELETE FROM product WHERE id=$rec";
      
      
      $res=mysqli_query($con,$mysql1);

      if($res)header("location:view_product.php");

    
      $rec= $_POST['id2'];
      $nprice= $_POST['price2'];
      $user = $_SESSION['user_id'];
    
      
      $mysql1="INSERT INTO bid(product_id, `user_id`, current_bid)
              VALUES( '$rec', '$user', '$nprice')";

      $res=mysqli_query($con,$mysql1);
      
      // $mysql1="UPDATE product SET price=$nprice WHERE id=$rec";
      // $res=mysqli_query($con,$mysql1);

      if($res)header("location:view_product.php");

 
    } 
   
   

?>



<?php 
                                     
  if(isset($_POST['review'])){

     header("location:review.php");
  
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
    
    <title>All Products</title>
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
  background-color:#b2beb5;
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
  background-color: #04AA6D;
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
            <a class="active">View Products</a>
            <form action="view_product.php" method="post">
            <div><br><br>
             Delete Product <input type="id" name="id" required><br><br>
             <input type ="submit" value="Confirm" name="submit"><br><br>

            </div>
            </form>

            <form action="view_product.php" method="post">
            <div><br><br>
             Bid Product
             <br>
             Enter id: 
             <input type="text" name="id2" required><br><br>
             Enter Bid:
             <input type="text" name="price2" required><br><br>
             <input type ="submit" value="Confirm" name="submit"><br><br>
             <br><br>
              **More Info**
             <b> <a href="highest.php">View Now</a></b>

             <a href="../demo.html">home</a>

            </div>
            </form>

        </div>
    </div>
    <div class="content">

        <!-- <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        </form> -->


        <?php
            $conn = new mysqli('localhost', 'root', '', 'auctionbits');
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);


            ?> <div class="books-container"> <?php
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                $sql_bid = "SELECT
                                *
                            FROM
                                bid AS b
                            JOIN `user` AS u
                            ON
                                u.id = b.user_id
                            WHERE
                                (b.product_id, b.current_bid) = ANY (
                                  SELECT
                                    b1.product_id,
                                    b1.current_bid
                                FROM
                                    bid AS b1
                                WHERE
                                    b1.current_bid =(
                                    SELECT
                                        b2.current_bid
                                    FROM
                                        bid AS b2
                                    WHERE
                                        b2.product_id = b1.product_id
                                    ORDER BY current_bid DESC LIMIT 1
                                )
                                
                              ) AND product_id=".$row['id'];
                // echo $sql_bid;
                $bid_result = $conn->query($sql_bid);
                $highest_bid=0;
                $highest_bid_by="";
                if($bid_result->num_rows!=0){
                  $bid_result=$bid_result->fetch_assoc();
                  $highest_bid = ($bid_result['current_bid']);
              

                  // $all_user = isset($highest_bid['current_bid']) ? count($highest_bid['current_bid']) : 0;
   
                   $highest_bid_by =($bid_result['name']);
                 
                }
               

                ?>
                    
                        <div class="product">
                           <div class="product-info">
                                <div class="product-name"> <?php echo $row['id'] ?> </div>
                                <div class="product-name"> <?php echo $row['name'] ?> </div>
                                <div class="product-writer font-weight-bold"> <?php echo $row['description'] ?> </div>
                                <div class="text-secondary text-uppercase"> <?php echo $row['category'] ?> </div>
                                <div class="product-price"> Initial Bid : <?php echo $row['price'] ?>৳</div>
                                <div class="product-price"> Highest Bid : <?php echo $highest_bid ?>৳</div>
                                <div class="product-price"> Highest Bid By : <?php echo $highest_bid_by ?>৳</div>
                                
                               
                                <a href="review.php?id=<?php echo $row['id'] ?>"><button>Review</button></a>
                             
                               

                               
                            </div>
                        </div>
                    </a>
                <?php
            } ?> </div> <?php
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </div>
    <div>
    
    </div>
</body>
</html>