<?php
 include("../auth.php");

 $user = $_SESSION['user_id'];
  if(isset($_POST['submit'])){
      
      $id= $_POST['id'];
      $post=$_POST['post'];

      //echo $id;
      //echo $post;
      $con=mysqli_connect("localhost","root","","auctionbits");
      
      if(!$con)die("failed");

      $mysql="INSERT INTO display(user_id,product_id,post)";
      $mysql.="VALUES('$user','$id','$post')";
      
      $res=mysqli_query($con,$mysql);

      if($res)header("blog.php");
      else echo "failed";

}






?>

<!-- $mysql1="INSERT INTO display(product_id, `user_id`, post)
                  VALUES(".$_POST['id'].", ".$_SESSION['user_id'].",".$_POST['post']."')"; -->


          


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Blog</title>
</head>

<head>


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
  background-color: #b2beb5;
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

<div class="sidebar-container">
        <div class="sidebar">

            <form action="blog.php" method="post">
            <div><br><br>
             Make Post :
             <br>
             Enter id : 
             <input type="text" name="id" required><br><br>
             Post :
             <input type="text" name="post" required><br><br>
             <input type ="submit" value="Confirm" name="submit"><br><br>


             <a href="../demo.html">home</a>


            </div>
            </form>

        </div>
    </div>

    <div class="content">
    <?php
            $conn = new mysqli('localhost', 'root', '', 'auctionbits');
            $sql = "SELECT p.id as pid, p.name as pname, u.name as uname, d.post as post
                    FROM product as p  JOIN display as d ON p.id=d.product_id
                    JOIN user as u ON u.id=d.user_id";
            $result = $conn->query($sql);


            ?> <div class="books-container"> <?php
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {


                ?>
                    
                        <div class="product">
                           <div class="product-info">
                                <div class="product-name"> <?php echo $row['pid'] ?> </div>
                                <div class="product-name"> <?php echo $row['pname'] ?> </div>
                                <div class="product-name">BY : <?php echo $row['uname'] ?> </div>
                                <div class="product-writer font-weight-bold"> <?php echo $row['post'] ?> </div>

                               
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

</head>

</html>