<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- Theme CSS -->
<link href="css/agency.min.css" rel="stylesheet"/>
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
                        <a class="page-scroll" href="register.php">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Login</a>
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
                <div class="intro-lead-in">Login!!</div>
                <div class="intro-heading">Its time to Login!!</div>
                <a href="#login" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <section id="login">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
          <div class="card">
                      <div class="card-header bg-danger"><h3>Admin Section</h3></div>
                      <div class="card-body">
                      <img src="images/admin.jpg" class="img-responsive" style="width:100px" alt="">
                      <h3>Login as an Admin</h3>
                      <p>For Searching the employee having potential</p>
                      <p>Paste your own job specification</p>
                      </div>
                      <div class="card-footer">
                      <a href="adminlogin.php" class="btn btn-danger d-flex justify-content-center">Login Now!!!</a>
                      </div>
                      </div>
                      </div>
                 <div class="col-md-6">
                <div class="card">
                <div class="card-header bg-danger"><h3>User Section</h3></div>
                      <div class="card-body">
                      <img src="images/user.jpg" class="img-responsive" style="width:100px" alt="">
                      <h3>login as a User</h3>
                      <p>Look up for a job</p>
                      <p>Submit an online Quick Resume</p>
                      </div>
                      <div class="card-footer">
                      <a href="userlogin.php" class="btn btn-danger d-flex justify-content-center">Login Now!!!</a>
                      </div>
                      </div>
                      </div>
            </div>
        </div>
</section>
<footer>
        <div class="container bg-dark-gray">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; ORMS</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.instagram.com/__umar_qureshi_/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/dqureshiumar"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"><strong>Privacy Policy</strong></a>
                        </li>
                        <li><a href="#"><strong>Terms of Use</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
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