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
    
   </head>
   <body>

   <div class="container">
   
    <?php include 'header.php';?>

    <div id="main">
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Amount</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="shopping";

          $conn=mysqli_connect($servername,$username,$password,$dbname);

          if(!$conn){
              die("connection failed:" . mysqli_connect_error());
          }

          $sql = "SELECT c.*, p.* FROM cart as c inner join products p on p.productID = c.productID WHERE c.sessionID=?";
          
          $sessionID = session_id();
          
          $stmt = $conn->stmt_init();
          $stmt->prepare($sql);
          $stmt->bind_param("s", $sessionID);
          $stmt->execute();
          $result = $stmt->get_result();
          $totalamount = 0;
          
          while($resultArray = $result->fetch_assoc())
          {
            echo '<tr>';
            echo '<td>'.$resultArray['pname'].'</td>';
            echo '<td>'.$resultArray['quantity'].'</td>';
            echo '<td>₹'.$resultArray['rate'].'</td>';
            echo '<td>₹'.$resultArray['amount'].'</td>';
            echo '<td>';
            echo '<a href="#"><i class="fa fa-trash fa-lg text-danger"></i>';
            echo '</a>';
            echo '</td>';
            echo '</tr>';
            $totalamount += $resultArray['amount'];
          }
      ?>
      
    </tbody>
  </table>

    <div id="checkout">
        <p class="lead text-right">
            Total Amount: <i class="fa fa-inr fa-lg"></i><?php echo $totalamount; ?>/-
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
                $dbname="shopping";

                $conn=mysqli_connect($servername,$username,$password,$dbname);

                if(!$conn){
                    die("connection failed:" . mysqli_connect_error());
                }

                $userID = 1;  //$_SESSION['userID'];
                $orderDate = date("Y-m-d");

                $sql="insert into orders (userID, TotalAmount, orderDate) values ('$userID', '$totalamount', '$orderDate')";
                
                if(mysqli_query($conn,$sql))
                {
                  $orderID = mysqli_insert_id($conn);
                }

                $sql = "INSERT INTO order_items (orderID, productID, quantity) SELECT '$orderID' as orderID, productID, quantity FROM cart WHERE sessionID = '$sessionID'";

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

    <?php include 'footer.php';?>
    
    </div>
</body>
</html>