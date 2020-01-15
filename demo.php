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
   

    <div id="main">
    
        <div class="jumbotron text-center">
        
            <h1>ONLINE RECRUITMENT MANAGEMENT SYSTEM</h1>
            <p>Onew platform for All Job Seekers.</p> 
        </div>



        <div class="row">


            <?php
                      
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="orms";

                $conn=mysqli_connect($servername,$username,$password,$dbname);

                if(!$conn){
                    die("connection failed:" . mysqli_connect_error());
                }

                $sql = "SELECT * from product";

                $result = mysqli_query($conn,$sql);

                while($resultArray = mysqli_fetch_array($result))
                {
                   echo '<div class="col-sm-4">';
                   echo '<div class="card">';
                   echo '<div class="card-header bg-danger">'.$resultArray['pname'].'</div>';
                   echo '<div class="card-body">';
                   echo '<img src="'.$resultArray['pimage'].'" class="img-responsive" style="width:100%" alt="Image">';
                   echo '<p class="pt-3 lead text-center"><i class="fa fa-inr"></i><label id="lblRate">'.$resultArray['rate'].'</label>/-</p>';
                   echo '</div>';
                   echo '<div class="card-footer">';
                   echo '<a href="product.php?pid='.$resultArray['pid'].'" class="btn btn-danger d-flex justify-content-center">Buy Now</a>';
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
                }
                ?>

        </div>
    
    </div>

    <br>
    <br>
    
    </div>
</body>
</html>