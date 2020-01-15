<?php
   // session_destroy();
   // error_reporting(2);
   session_start();
   
   if(isset($_SESSION['login_user'])){
      if($_SESSION['login_user'] == $_POST['email']){
         header("location:adminhome.php");
            }
   }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
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
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM adminreg WHERE ademail = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         session_start();  
          $_SESSION['username'] = $myusername;  
          $_SESSION['full_name'] = $row['adminname'];  
          $_SESSION['adminid'] = $row['adminid'];
          $_SESSION['email'] = $row['ademail'];
          $_SESSION['contact'] = $row['contact'];
          $_SESSION['designation'] = $row['designation'];
          $_SESSION['company'] = $row['company'];
         
         header("location: adminhome.php");
      }else {
        echo '<script type="text/javascript">';
        echo 'swal("Oops!","Invalid Login Details","error")';
        echo '</script>';
      }
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

    <title>Login for An Admin</title>
    <!-- SWEET ALERT -->
  
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
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="">Register</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#page-top">Admin Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="userlogin.php">User Login</a>
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

    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Email">Email:</label>
            <input class="form-control" type="email" name="email" id="Email" required="" placeholder="email@example.com">
            <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password-field" Placeholder="Password.." required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="login">
        </div>
        </div>
        <div>
    </form>
            <!-- if($_SERVER["REQUEST_METHOD"]=="POST")
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
            $ademail=$_POST['email'];
            $password=$_POST['password'];
            
            $sql = "SELECT * FROM adminreg where ademail=? and password=?";
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("ss", $ademail,$password);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
          
            if($resultArray)
                        {
                        //     $_SESSION['adminid']=$resultArray['adminid'];
                        //     header("Location:adminhome.php");
                        // }

                        $_SESSION['adminid']=$resultArray['adminid'];
                            /* Redirect browser */
                            echo '<script>document.location.href="adminhome.php";</script>';
                            die();
                            }
                        else
                        {
                            echo '<script type="text/javascript">';
                            echo 'swal("Oops!","Invalid Login Details","error")';
                            echo '</script>';
                        }
                        mysqli_close($conn);
                    } -->
                            </div>
    </div>
    </section>

         <!-- jQuery -->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="js/sweetalert.min.js"></script>
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