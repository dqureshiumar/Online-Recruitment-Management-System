<?php
session_start();  
if(!isset($_SESSION["adminid"]))  
{  
  header("location:adminlogin.php");  
} 

if (@session_status() == PHP_SESSION_NONE) {
  @session_start();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analyse</title>
      <!-- Bootstrap Core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- Theme CSS -->
<link href="css/agency.css" rel="stylesheet"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
<![endif]-->

    <script src="js/sweetalert.min.js"></script>
   </head>
   <body id="page-top" class="index">
     
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Welcome to ORMS</a>
                </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                        <a class="page-scroll" href="adminhome.php">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#search">Search for an Employee</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#paste">Paste a Job</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="adminlogout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav> 

<section id="cart">

   <div class="container">

    <div id="main">
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Employee Name</th>
        <th>Surame</th>
        <th>Qualification</th>
        <th>Address</th>
        <th>Experience</th>
        <th>Mail</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <form class="float-right" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <?php

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="orms";

          $conn=mysqli_connect($servername,$username,$password,$dbname);

          if(!$conn){
              die("connection failed:" . mysqli_connect_error());
          }
          $userID = $_SESSION['adminid'];
            $fname="";
            $lname="";
            $qualification="";
            $country="";
            $experience="";
          $sql = "SELECT id,fname,lname,qualification,country,experience from wishlist WHERE userID=?"  or die($mysqli->error());
          //$sessionID = session_id();
          $stmt = $conn->stmt_init();
          $stmt->prepare($sql);
          $stmt->bind_param("s", $userID);
          $stmt->execute();
          $result = $stmt->get_result();
          //$totalamount = 0;  
          
          while($resultArray = $result->fetch_assoc())
          {
            echo '<tr>';
            echo '<td>'.$resultArray['fname'].'</td>';
            echo '<td>'.$resultArray['lname'].'</td>';
            echo '<td>'.$resultArray['qualification'].'</td>';
            echo '<td>'.$resultArray['country'].'</td>';
            echo '<td>'.$resultArray['experience'].'</td>';
            echo'<td><a href="mailo.php?id='.$resultArray['id'].'"; class="btn btn-success">Mail</a></td>';
            echo'<td><a href="addelete.php?id='.$resultArray['id'].'" class="btn btn-danger">Delete</a></td>';
        //     echo"<td><input name='fname' id='fname' type='text' value='" . $resultArray['fname'] . "' readonly style='border:none'></input></td>";
        //   echo"<td><input name='lname' id='lname' type='text' value='" . $resultArray['lname'] . "' readonly style='border:none'></input></td>";
        //   echo"<td><input name='qualification' id='qualification' type='text' value='" . $resultArray['qualification'] . "' readonly style='border:none'></input></td>";
        //   echo"<td><input name='country' id='country' type='text' value='" . $resultArray['country'] . "' readonly style='border:none'></input></td>";
        //   echo"<td><input name ='experience' id='experience' type='text' value='" .$resultArray['experience'] . "' readonly style='border:none'></input></td>";
            echo '<td>';
            echo '';
            echo '</td>';
            echo '</tr>';
            // $totalamount += $resultArray['total'];
          }
      ?>
      
    </tbody>
  </table>
  <input type="submit" class="btn btn-primary" value="Delete All" required>
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

                  mysqli_query($conn,$sql);

                $sql = "DELETE from wishlist where userID = '$userID'";

                if (mysqli_query($conn,$sql))
                {
                  echo "<script>swal('Deleted ','All is deleted','error').then(() => { window.location.href='adminhome.php'; });</script>";
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
    </section>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script> -->

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>
</html>
