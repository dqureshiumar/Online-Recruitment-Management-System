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

    <title>Home-Admin</title>
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
                        <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li>
                        <a class="page-scroll" href="adminprofile.php">Profile</a>
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
        <header>
                <div class="container">
                    <div class="intro-text">
                        <div class="intro-lead-in">Welcome Admin</div>
                        <div class="intro-heading">You can search for an employee or you can paste your job.</div>
                        <a href="#portfolio" class="page-scroll btn btn-xl">Start</a>
                    </div>
                </div>
         </header>
         <section id="portfolio">
         <section id="search">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Search For Employees</h2>
                        <h3 class="section-subheading text-muted">You can see a variety of Talents here.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 portfolio-item">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="img/portfolio/searchemp.jpg" class="img-responsive" alt="" width=360px >
                            </a>
                                <div class="portfolio-caption">
                                    <h4>Here Resumes can be seen</h4>
                                    <p class="text-muted">Search for a Resume.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            <section id="portfolio">
            <section id="paste">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Paste your own Job Requirements</h2>
                        <h3 class="section-subheading text-muted">Paste Jobs Requirements that can be seen to Job Seekers.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 portfolio-item">
                            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="img/portfolio/hire.jpg" class="img-responsive" alt="" width=360px >
                            </a>
                                <div class="portfolio-caption">
                                    <h4>Here Resumes can be seen</h4>
                                    <p class="text-muted">Search for a Resume.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            <footer>
                <div class="container">
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
            <!-- Portfolio Modals -->
            <!-- Use the modals below to showcase details about your portfolio projects! -->

            <!-- Portfolio Modal 1 -->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2>Search For Employees</h2>
                                        <p class="item-intro text-muted">You can see a variety of Talents here.</p>
                                        <img class="img-responsive img-centered" src="img/portfolio/empsearch.jpg" alt="">
                                        <p></p>
                                        <a href="searchemployee.php" class="btn btn-primary"><i class="fa fa-success"></i>Search an Employee</a> 
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 2 -->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <h2>Paste your own Job Requirements.</h2>
                                        <p class="item-intro text-muted">Paste Jobs Requirements that can be seen to Job Seekers.</p>
                                        <img class="img-responsive img-centered" src="img/portfolio/hiring.jpg" alt="">
                                        <p></p>
                                        <a href="adminpastejob.php" class="btn btn-primary"><i class="fa fa-success"></i>Paste a Job</a>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
