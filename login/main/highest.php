
<h4>The maximum Bid</h4>
<?php
   
  
      $con=mysqli_connect("localhost","root","","auctionbits");
      
      if(!$con)die("failed");
      
     $mysql1="select MAX(current_bid) AS p from bid";
      $res=mysqli_query($con,$mysql1);
     

    
      echo "<table align='center' border='1px' style='width: 800; line-height: 40px; '> \n";
    
      echo "<th>HIGHTEST BID </th>
          
           \n";
           
  
  
      while( $rows = mysqli_fetch_array( $res ) ) {
            extract( $rows );
            echo "<tr>";
            echo "<td>.$p</td>";
          
      
  
            
            echo "</tr> \n";
      }
  
      echo "</table> \n";
    
   

?>
<br><br>
<h4>The AVG rating is </h4>
<?php
   
  
      $con=mysqli_connect("localhost","root","","auctionbits");
      
      if(!$con)die("failed");

    
     $mysql2="select AVG(rating) AS r from review";
     
      $res2=mysqli_query($con,$mysql2);


    echo "<table align='center' border='1px' style='width: 800; line-height: 40px;'> \n";
    
    echo "<th>AVERAGE RATING </th>
        
         \n";
         


    while( $rows = mysqli_fetch_array( $res2 ) ) {
          extract( $rows );
          echo "<tr>";
          echo "<td>.$r</td>";
        
    

          
          echo "</tr> \n";
    }

    echo "</table> \n";
   
   

?>

<br><br>
<h4>The product gets more review  </h4>

<?php
   
  
      $con=mysqli_connect("localhost","root","","auctionbits");
      
      if(!$con)die("failed");

     // $mysql1="select * from product";
      
     //$mysql1="select MAX(price) AS p from product";
     $mysql2="SELECT  p.name AS pname,product_id,COUNT(*)AS reviewnum
              FROM review AS r
              JOIN product AS p WHERE p.id=r.product_id 
              GROUP BY product_id;";
     
      $res2=mysqli_query($con,$mysql2);

    


      echo "<table align='center' border='1px' style='width: 800; line-height: 40px;'> \n";
    
	echo "<th>product Name</th>
          <th>Product ID</th>
          <th>Review Number</th>
           \n";
           


	while( $rows = mysqli_fetch_array( $res2 ) ) {
		extract( $rows );
		echo "<tr>";
            echo "<td> $pname</td>";
		echo "<td> $product_id</td>";
		echo "<td> $reviewnum</td>";
	

		
		echo "</tr> \n";
	}

	echo "</table> \n";
   
    
   

?>



