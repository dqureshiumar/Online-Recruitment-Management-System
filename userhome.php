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

    <title>Home-User</title>
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
                            <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li>
                        <a class="page-scroll" href="userprofile.php">Profile</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#search">Fill a Resume</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#paste">Search for a Job</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="userlogout.php">Logout</a>
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
                        <div class="intro-lead-in">Welcome User</div>
                        <div class="intro-heading">Difficult for Finding Jobs.</div>
                        <p align="center">Paste your Resume or Search for Jobs Online</p>
                        <a href="#portfolio" class="page-scroll btn btn-xl">Start</a>
                    </div>
                </div>
         </header>
         <section id="portfolio">
         <section id="search">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Its time to gear up!!!</h2>
                        <h3 class="section-subheading text-muted">Show your skills.</h3>
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
                                <img src="img/portfolio/resume.jpg" class="img-responsive" alt="" width=360px >
                            </a>
                                <div class="portfolio-caption">
                                    <h4>Here Resumes are to be filled</h4>
                                    <p class="text-muted">So....Fill it wisely</p>
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
                        <h2 class="section-heading">Go explore for a potential Job</h2>
                        <h3 class="section-subheading text-muted">A variety of jobs are available here.</h3>
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
                                <img src="img/portfolio/vacancy.jpg" class="img-responsive" alt="" width=360px >
                            </a>
                                <div class="portfolio-caption">
                                    <h4>Vacancy section.</h4>
                                    <p class="text-muted">Be the first one to apply</p>
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
                                        <h2>Show your Talent</h2>
                                        <p class="item-intro text-muted">Fill all qualties in your Resume.</p>
                                        <img class="img-responsive img-centered" src="img/portfolio/resumewall.jpg" alt="">
                                        <p></p>
                                        <a href="resume.php" class="btn btn-primary"><i class="fa fa-success"></i>Go to Resume</a> 
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
                                        <h2>A variety of jobs are available here.</h2>
                                        <p class="item-intro text-muted">Goodbye to introverts.</p>
                                        <img class="img-responsive img-centered" src="img/portfolio/vacancies.jpg" alt="">
                                        <p></p>
                                        <a href="usersearchjobs.php" class="btn btn-primary"><i class="fa fa-success"></i>Search for Jobs</a>
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
