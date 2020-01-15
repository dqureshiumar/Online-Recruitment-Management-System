<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Now!!!</title>

    
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
            <!-- SWEET ALERT -->
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
                        <a class="page-scroll" href="index.php">&laquo;Back to Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#register">Admin Registration</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="userreg.php">User Registration</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php">Login</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Register Now!!</div>
                <div class="intro-heading">Register as a Job seeker or a Job Provider!</div>
                <a href="#register" class="page-scroll btn btn-xl">Go Register</a>
            </div>
        </div>
    </header>
    <section id="register">
    <div class="container">
    <div id="main">

                        <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST"">
                                <div class="form-group">
                        <label for="txtName">NAME:</label>
                        <input class="form-control" type="text" name="txtName" id="txtName" Placeholder="Name.."required>
                        </div>
                        <div class="form-group">
                            <label for="txtcompany">COMPANY NAME:</label>
                            <input class="form-control" type="text" name="txtcompany" id="txtcompany" Placeholder="Company.."required>
                        </div>
                        <div class="form-group">
                                <label for="email">EMAIL:</label>
                                <input class="form-control" type="email" name="email" id="email" Placeholder="Email.." required>
                        </div>
                        <div class="form-group">
                                <label for="password">PASSWORD:</label>
                                <input class="form-control" type="password" name="password" id="password-field" Placeholder="Password.." required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <!-- <div class="form-group">
                                    <label for="confirm">CONFIRM PASSWORD:</label>
                                    <input class="form-control" type="password" name="confirm" id="confirm" required>
                        </div> -->
                        <div class="form-group">
                            <label for="txtdesignation">DESIGNATION:</label>
                            <input class="form-control" type="text" name="txtdesignation" id="txtdesignation" Placeholder="Designation.." required>
                        </div>
                        <div class="form-group">
                                    <label for="contactno">CONTACT NO:</label>
                                    <input class="form-control" type="text" name="contact" id="contact" Placeholder="Contact No.." required>
                        </div>
                                <div class="form-group">
                                        
                                        <input type="submit" class="btn btn-primary" value="REGISTER">
                                </div>
                            </form>
            <!-- MAKING IT STORE TO A DATABASE -->
                            <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $adminname=$_POST['txtName'];
            $company =$_POST['txtcompany'];
            $ademail=$_POST['email'];
            $password=$_POST['password'];
            $designation=$_POST['txtdesignation'];
            $contact=$_POST['contact'];
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="orms";

            //CREATE CONNECTION
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            //CHECK CONNECTION
            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }
            $check=mysqli_query($conn,"SELECT * from adminreg where company='$company' or adEmail='$ademail' or Contact='$contact'"); 
            $checkrows=mysqli_num_rows($check);
            if($checkrows>0)
            {
                echo '<script type="text/javascript">';
                echo 'swal("Admin Exists","Registration Failed","error")';
                echo '</script>';
            }
            else
            {
            $sql=" INSERT INTO adminreg (ADMINname,company,adEmail,Password,designation,Contact)
                    VALUES ('$adminname','$company','$ademail','$password','$designation','$contact')";
            if (mysqli_query($conn,$sql))
            {
                echo '<script type="text/javascript">';
                echo 'swal("Good!","Registration Successful","success")';
                echo '</script>';
            }
            else
            {
                echo"Error:" .mysqli_error($conn);
            }
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
<script>
$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>
<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>

</body>
</html>