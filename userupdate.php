<?php
session_start();  
if(!isset($_SESSION["id"]))  
{  
  header("location:userlogin.php");  
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

    <title>Update Profile</title>
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


</head>
<body id="page-top" class="index">

    <!-- banner -->
     <div class="container">
        <!-- header -->
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
                        <a class="page-scroll" href="userprofile.php">Profile</a>
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
        <!-- //header -->
      
    </div>
	 <!-- //banner-text -->
      <div>
 <section>
                  
                  <div class="container">
                      <br>
                      <br>
    <h1>Edit Profile</h1>
	<div class="row">
     
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST"">
                                <div class="form-group">
                        <label for="txtName">NAME:</label>
                        <input class="form-control" type="text" name="txtName" id="txtName" Placeholder="Name.."required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="txtcompany">COMPANY NAME:</label>
                            <input class="form-control" type="text" name="txtcompany" id="txtcompany" Placeholder="Company.."required>
                        </div> -->
                        <div class="form-group">
                                <label for="email">EMAIL:</label>
                                <input class="form-control" type="email" name="email" value="<?php $emailll=$_SESSION['email']; echo $emailll;?>" readonly id="email" Placeholder="Email.." required>
                        </div>
                        <!-- <div class="form-group">
                                <label for="password">PASSWORD:</label>
                                <input class="form-control" type="password" name="password" id="password-field" Placeholder="Password.." required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div> -->
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
                                        
                                        <input type="submit" class="btn btn-primary" value="UPDATE">
                                        <input type="reset" class="btn btn-primary" value="CANCEL">
                                </div>
                            </form>
      </div>
  </div>
</div>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['txtName'];
        //$company =$_POST['txtcompany'];
        $email=$_POST['email'];
        // $password=$_POST['password'];
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
    {
    $sql="UPDATE userreg SET name = '$name',class='$designation',contact='$contact' WHERE email = '$email'";
    if (mysqli_query($conn,$sql))
    {
         
        echo '<script type="text/javascript">';
        echo 'swal("Good!","Updating Successful","success")';
        echo '</script>';
    }
    else
    {
        echo"Error:" .mysqli_error($conn);
    }
}
mysqli_close($conn);
}
}
?>

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
