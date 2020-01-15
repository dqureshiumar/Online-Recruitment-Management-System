<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'plugins.php';?>
    <script src="js/sweetalert.min.js"></script>
    
   </head>
   <body>

   <div class="container">

    <div id="main">
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Employee Name</th>
        <th>Qualification</th>
        <th>Address</th>
        <th>Experience</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="orms";

          $conn=mysqli_connect($servername,$username,$password,$dbname);

          if(!$conn){
              die("connection failed:" . mysqli_connect_error());
          }

          $sql = "SELECT fname,lname,qualification,address,experience FROM wishlist where userID=?";
          
          $stmt = $conn->stmt_init();
          $stmt->prepare($sql);
          $stmt->bind_param("s", $userID);
          $stmt->execute();
          $result = $stmt->get_result();
          //$totalamount = 0;
          
          while($resultArray = $result->fetch_assoc())
          {
            echo '<tr>';
            echo '<td>'.$resultArray['fname &nbsp; lname'].'</td>';
            echo '<td>'.$resultArray['qualification'].'</td>';
            echo '<td>₹'.$resultArray['address'].'</td>';
            echo '<td>₹'.$resultArray['experience'].'</td>';
            echo '<td>';
            echo '<a href="#"><i class="fa fa-trash fa-lg text-danger"></i>';
            echo '</a>';
            echo '</td>';
            echo '</tr>';
            // $totalamount += $resultArray['total'];
          }
      ?>
      
    </tbody>
  </table>

    <div id="checkout">
        <p class="lead text-right">
            <!-- Total Amount: <i class="fa fa-inr fa-lg"></i> -->
        </p>        
        <form class="float-right" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="submit" class="btn btn-primary" value="Checkout">
        </form>  
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="orms";

                $conn=mysqli_connect($servername,$username,$password,$dbname);

                if(!$conn){
                    die("connection failed:" . mysqli_connect_error());
                }
                $userID = 1;  //$_SESSION['userID'];
                $orderDate = date("Y-m-d");

                $sql="INSERT into analyse (name, orderDate, qualification, address, experience) values ('$name', '$orderDate','$qualification', '$address', '$experience')";
                
                if(mysqli_query($conn,$sql))
                {
                  $orderID = mysqli_insert_id($conn);
                }
                $sql = "INSERT INTO order_items (orderID, productID, quantity) SELECT '$orderID' as orderID, pid, quantity FROM cart WHERE sessionID = '$sessionID'";

                mysqli_query($conn,$sql);

                $sql = "delete from cart where sessionID = '$sessionID'";

                if (mysqli_query($conn,$sql))
                {
                    echo "<script>swal('Checkout','Your order has been confirmed.','info').then(() => { window.location.href='index.php'; });</script>";
                }
                else
                {
                    echo"Error:" .mysqli_error($conn);
                }
                mysqli_close($conn);               
            }                            
            ?>
    </div>
    </div>
    <br>
    <br>
    </div>
</body>
</html>
