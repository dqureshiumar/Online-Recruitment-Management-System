<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Details for a User</title>
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
                        <a class="page-scroll" href="index.php">&laquo;Back to Home</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="">Register</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#page-top">Update</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <!-- <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Register Succesfully!!!</div>
                <div class="intro-heading">Now Login:)</div>
                <a href="#login" class="page-scroll btn btn-xl">GO!</a>
            </div>
        </div>
    </header> -->
    <section id="login">
    <div class="container">
    <div id="main">

    <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="orms";
            //create connection
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            //check connection
            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }

            $adminid="";
            $adminname="";
            $company="";
            $email="";
            $password="";
            $designation="";
            $contact="";
            
            $sql = "SELECT * FROM adminreg where adminid=?";
            
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("i", $adminid);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
            if($resultArray)
            {
                $adminname= $resultArray['Name'];
                $company= $resultArray['company'];
                $email=  $resultArray['Email'];
                $password=  $resultArray['password'];
                $designation=  $resultArray['designation'];
                $contact= $resultArray['Contact'];
            }
            else
            {
                echo '<script type="text/javascript">';
                echo 'swal("Oops!","No data found","error")';
                echo '</script>';
            }
            
            mysqli_close($conn);
    ?>

    <div id="main">
    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
        <div class="form-group">
            <label for="AdminID">AdminID:</label>
            <input class="form-control" type="text" value='<?php echo $adminid; ?>' name="AdminID" id="AdminID">
        </div>
        <div class="form-group">
            <label for="txtName">Name:</label>
            <input class="form-control" type="text" value='<?php echo $adminname; ?>' name="txtName" id="txtName">
        </div>
        <div class="form-group">
            <label for="Company">Company:</label>
            <input class="form-control" type="text" value='<?php echo $company; ?>' name="company" id="company">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input class="form-control" type="text" value='<?php echo $email; ?>' name="txtEmail" id="txtEmail">
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input class="form-control" type="password" value='<?php echo $password; ?>' name="password" id="password">
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input class="form-control" type="text" value='<?php echo $designation; ?>' name="designation" id="designation">
        </div>
        <div class="form-group">
            <label for="contact">Contact No:</label>
            <input class="form-control" type="text" value='<?php echo $contact; ?>' name="txtContact" id="txtContact">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Update">
        </div>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="orms";

            //create connection
            $conn=mysqli_connect($servername,$username,$password,$dbname);

            //check connection
            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }
            $adminid=$_POST['adminid'];
            $adminname=$_POST['txtName'];
            $company=$_POST['company'];
            $email=$_POST['txtEmail'];
            $password=$_POST['password'];
            $designation=$_POST['designation'];
            $contact=$_POST['txtContact'];

            $sql="Update adminreg set Email='$email', Company='$company',Password='$password',Designation='$designation' Contact='$contact' where Name='$adminname'";
            if (mysqli_query($conn,$sql))
            {
                echo '<script type="text/javascript">';
                echo 'swal("Oops!","No data found","error").then(() => {window.location.href="adminprofile.php";})';
                echo '</script>';
                
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