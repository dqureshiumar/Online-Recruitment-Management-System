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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search for an Employee</title>
    <!-- SWEET ALERT -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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
                        <a class="page-scroll" href="adminprofile.php">Profile</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#search">Search for an Employee</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="adminpastejob.php">Paste a Job</a>
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
        <section id="search">
        <div class="container">
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

                    $sql = "SELECT * from resumes ORDER BY id DESC";

                    $result = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));

                    while($resultArray = mysqli_fetch_array($result))
                    {
                    echo '<div class="col-sm-6">';
                    echo '<div class="card">';
                    echo '<div class="card-header">Full Name:-'.$resultArray['fname'].'&nbsp;'.$resultArray['lname'].'</div>';
                    echo '<div class="card-body">';
                    echo '<p>Email ID:-'.$resultArray['email'].'</p>';
                    echo '<p>Gender:-'.$resultArray['gender'].'</p>';
                    echo '<p>Country:-'.$resultArray['country'].'</p>';
                    echo '<p>Martial Status:-'.$resultArray['martial'].'</p>';
                    echo '<p>Languages Known:-'.$resultArray['language'].'</p>';
                    echo '<p>Qualification:-'.$resultArray['qualification'].'</p>';
                    echo '<p>Experience:-'.$resultArray['experience'].'</p>';
                    echo '</div>';
                    echo '<div class="card-footer">';
                    echo '<a href="try.php?id='.$resultArray['id'].'" class="btn btn-danger d-flex justify-content-center">Accept</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<br>';
                    echo '<br>';
                    echo '</div>';
                    }
        ?>
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

</body>
</html>