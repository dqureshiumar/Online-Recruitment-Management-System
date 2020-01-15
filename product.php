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
    <script>
        $(document).ready(function()
        {
            var urlParams = new URLSearchParams(window.location.search);
            $("#txtPID").html(urlParams.get('pid'));
        });

        function calculate()
        {
            var rate = $("#lblRate").html();
            var quantity = $("#txtQuantity").val();
            var total = rate * quantity;

            $("#lblTotal").html(total);
            $("#txtTotal").val(total);
        }
    </script>
 
   </head>
   <body>
   <div class="container">
    <!-- include 'header.php'; -->
    <div id="main">
        <br>
        <?php 
        // if(isset($_GET['pid'])==false)
        // {
        //     header("Location: index.php");
        // }
            $pid = $_GET['pid'];
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="orms";
            //create connection
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            //checking connection
            if(!$conn)
            {
                die("connection failed".mysqli_connect_error());
        
            }
            $pname="";
            $rate="";
            $pimage="";
            $description="";
            $sql="SELECT * FROM product where pid=?" or die($mysqli->error());
            
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("i",$pid);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
        
            if($resultArray)
            {
                $pname=$resultArray['pname'];
                $rate=$resultArray['rate'];
                $pimage=$resultArray['pimage'];
                $description=$resultArray['description'];
            }
            else
            {
                echo "<script>swal('no data found');</script>";
            }
            mysqli_close($conn);
            ?>

        <div class="row  pt-5">
            
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>

            <div class="col-sm-8">
                <div id="description">
                        <p class="lead">
                            Description: <?php echo $description; ?>
                        </p>
                </div>
                
                    <div id="totalamount">
                        <p class="small">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="hidden" name="txtPID" id="txtPID" value="<?php $_GET['pid']; ?>">
                                Price: <i class="fa fa-inr"></i> <label id="lblRate"><?php echo $rate;?></label> /-
                                <input type="hidden" name="txtrate"  id="txtrate" value='<?php echo $rate;?>'>
                                <br>
                                Quantity: <input id="txtQuantity" name="txtQuantity"  type="number" onkeyup="calculate();" onchange="calculate();" min="1" class="form-control w-25" value="1" name="txtqty" id="txtqty">
                                <br>
                                Total: <i class="fa fa-inr"></i><label id="lblTotal"><?php echo $rate;?></label>/-
                                <input type="hidden"  name="txtTotal" id="txtTotal" <?php echo $rate;?>>
                                <br>
                                <input type="submit" class="btn btn-primary" value="Add to Cart">
                            </form>
                        </p>
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
                                $quantity=$_POST['txtQuantity'];
                                $total=$_POST['txtrate']*$quantity;
                                $sessionID = session_id();                       
                                $sql="INSERT into cart (userID, sessionID, pid, quantity, total) values ('$userID', '$sessionID', '$pid', '$quantity', '$total')";
                              
                                if (mysqli_query($conn,$sql))
                                {
                                    echo "<script>swal('Cart','Product added to cart','info').then(() => { window.location.href='index.php'; });</script>";
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
        </div>
    </div>
    <br>
    <br>
    </div>
</body>
</html>
