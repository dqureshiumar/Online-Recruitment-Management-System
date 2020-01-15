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
    <title>Document</title>
    <!-- SWEET ALERT -->
    <script src="js/sweetalert.min.js"></script>
    
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
                        <a class="page-scroll" href="#page-top">Home</a>
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
    <section>
   <div class="container">
    <!-- include 'header.php'; -->
    <div id="main">
        <br>
        <?php 
        // if(isset($_GET['pid'])==false)
        // {
        //     header("Location: index.php");
        // }
            $id = $_GET['id'];
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
            $fname="";
            $lname="";
            $email="";
            $gender="";
            $country="";
            $martial="";
            $language="";
            $qualification="";
            $experience="";
            $sql="SELECT * FROM resumes where id=?" or die($mysqli->error());
            
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
        
            if($resultArray)
            {
                $fname=$resultArray['fname'];
                $lname=$resultArray['lname'];
                $email=$resultArray['email'];
                $gender=$resultArray['gender'];
                $country=$resultArray['country'];
                $martial=$resultArray['martial'];
                $language=$resultArray['language'];
                $qualification=$resultArray['qualification'];
                $experience=$resultArray['experience'];
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
                            Full Name: <?php echo $fname; echo "&nbsp;"; echo $lname;  ?>
                        </p>
                </div>
                
                    <div id="totalamount">
                        <p class="small">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <?php $userID = $_SESSION['adminid']; ?>
                                Email:-<?php echo $email;?><br>
                                Gender:-<?php echo $gender;?><br>
                                Country:-<?php echo $country;?><br>
                                Martial Status:-<?php echo $martial;?><br>
                                Languages Known:-<?php echo $language;?><br>
                                Qualification:-<?php echo $qualification;?><br>
                                Experience:-<?php echo $experience;?><br><br>
                                <input type="submit" class="btn btn-primary" value="Add to Wishlist">
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
                                //$userID = session_id();
                                //$userID = 1;  //$_SESSION['userID'];
                                //$quantity=$_POST['txtQuantity'];
                                //$total=$_POST['txtrate']*$quantity;
                               // $sessionID = session_id();                       
                                $sql="INSERT into wishlist (userID, fname, lname, email, gender, country, martial, language, qualification, experience) values ('$userID', '$fname', '$lname', '$email', '$gender', '$country', '$martial', '$language', '$qualification', '$experience')";
                              
                                if (mysqli_query($conn,$sql))
                                {
                                    echo "<script>swal('Good','Employee added to wishlist','success').then(() => { window.location.href='cart.php'; });</script>";
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
    </section>
     <!-- jQuery -->
     <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</body>
</html>
