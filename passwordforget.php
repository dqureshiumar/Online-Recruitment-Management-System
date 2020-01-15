<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>
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
                    <!-- <li>
                        <a class="page-scroll" href="register.php"><strong>Register</strong></a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="index.php">&laquo;Back to Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="adminlogin.php">Admin Login</a>
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
    <section>
    <div class="container">
    <div id="main">

<form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Email">User Email:</label>
            <input class="form-control" type="text" name="email" id="Email" required placeholder="User Email ID..">
        </div>
        </div>
        </form>
        </div>
        </div>
        <section>
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
        $email=$_POST['email'];
		$sql="SELECT password from userreg where email=$email";
		$stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
		if($resultArray){
			$to=$resultArray["email"];

			$subject = ' Your Password';

			$headers = "From:dqureshiumar@gmail.com \r\n";
			$headers .= "Reply-To:dqureshiumar@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


			//$headers .= "MIME-Version: 1.0\r\n";
			//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "X-Mailer: PHP/" . phpversion();
			$headers .= "X-Priority: 1" . "\r\n";

			$message = '<html><body>';

			$message .='<div style="background:#03a9f4;color:#FFFFFF;width:100%;"><center>Update Password</center><h3 style="padding-left:2px;"></h3><h1 style="padding-left:2px">Your Password</h1><br></div><br>';
			$message .='<div style="background:#FFFFFF;color:#000000;width:100%;">'.$row["Password"].'<br><br></div></body></html>';
			if($to!=""){
				mail($to, $subject, $message, $headers);
				$response["success"] = 1;
				$response["message"] = "Your Password has been Send To your Email Id Successfully!!!";
				echo json_encode($response);
        }
    }
		// 	else{
		// 		echo "Error";
		// 	}
		 }
    else{
			echo "Error";
		}
?>