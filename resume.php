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

    <title>Resume</title>
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
                        <a class="page-scroll" href="#register">Register</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="userhome.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="userprofile.php">Profile</a>
                        </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Fill a Resume</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="usersearchjobs.php">Search a Job</a>
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

    <!-- Header
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Register Now!!</div>
                <div class="intro-heading">Register as a Job seeker or a Job Provider!</div>
                <a href="#register" class="page-scroll btn btn-xl">Go Register</a>
            </div>
        </div>
    </header> -->
    <section id="register">
    <div class="container">
    <div id="main">

    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST"">
    <h3>PERSONAL DETAILS:</h3>
    <div class="form-group">
    <label for="fname">First Name</label>
    <input class="form-control" type="text" id="fname" name="fname" placeholder="Your name.." required>
    </div>
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input class="form-control" type="text" id="lname" name="lname" placeholder="Your last name.." required>
    </div>
    <div class="form-group">
        <label for="Email">Email Id:</label>
        <input class="form-control" type="text" name="email" id="Email" placeholder="Email id.." required>
    </div>
    <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" id="Gender" name="gender" required>
      <option value="male"></option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
    </select>
    </div>
    <div class="form-group">
    <label for="country">Country</label>
    <select class="form-control" id="country" name="country" required>
      <option value="india">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    </div>
    <div class="form-group">
    <label for="martial">Martial status</label>
    <select class="form-control" id="martial" name="martial" required>
      <option value="single">Single</option>
      <option value="married">Married</option>
      <option value="divorced">Divorced</option>
    </select>
    </div>
    <div class="form-group">
        <label for="language">Language Profiency</label>
        <input class="form-control" type="text" name="language" id="language" placeholder="Language Profiency.." required>
    </div>
    <h3>EDUCATIONAL QUALIFICATION:</h3>
    <div class="form-group">
    <label for="qualification">DEGREE:</label>
    <select class="form-control" id="qualification" name="qualification" required>
      <!-- <option value="ssc">Passed from Maharashtra Board</option>
      <option value="married"></option>
      <option value="divorced">Divorced</option> -->
      <option>Bachelor of Architecture - B.Arch</option>
        <option>Bachelor of Arts - B.A.&nbsp;&nbsp; &nbsp;</option>
        <option>Bachelor of Ayurvedic Medicine &amp; Surgery - B.A.M.S.&nbsp;&nbsp; &nbsp;</option>
        <option>Bachelor of Business Administration - B.B.A.</option>
        <option>Bachelor of Commerce - B.Com.</option>
        <option>Bachelor of Computer Applications - B.C.A.</option>
        <option>Bachelor of Dental Surgery - B.D.S.</option>
        <option>Bachelor of Design - B.Des. / B.D.</option>
        <option>Bachelor of Education - B.Ed.</option>
        <option>Bachelor of Engineering / Bachelor of Technology - B.E./B.Tech.</option>
        <option>Bachelor of Fine Arts - BFA / BVA</option>
        <option>Bachelor of Fisheries Science - B.F.Sc./ B.Sc. (Fisheries).</option>
        <option>Bachelor of Homoeopathic Medicine and Surgery - B.H.M.S.</option>
        <option>Bachelor of Laws - L.L.B.</option>
        <option>Bachelor of Library Science - B.Lib. / B.Lib.Sc.</option>
        <option>Bachelor of Mass Communications - B.M.C. / B.M.M.</option>
        <option>Bachelor of Medicine and Bachelor of Surgery - M.B.B.S.</option>
        <option>Bachelor of Nursing </option>
        <option>Bachelor of Pharmacy - B.Pharm / B.Pharma.</option>
        <option>Bachelor of Physical Education - B.P.Ed.</option>
        <option>Bachelor of Physiotherapy - B.P.T.</option>
        <option>Bachelor of Science - B.Sc.</option>
        <option>Bachelor of Social Work - BSW / B.A. (SW)</option>
        <option>Bachelor of Veterinary Science &amp; Animal Husbandry - B.V.Sc. &amp; A.H. / B.V.Sc</option>
        <option>Doctor of Medicine - M.D.</option>
        <option>Doctor of Medicine in Homoeopathy - M.D. (Homoeopathy)</option>
        <option>Doctor of Pharmacy - Pharm.D&nbsp;&nbsp; &nbsp;</option>
        <option>Doctor of Philosophy - Ph.D. </option>
        <option>Doctorate of Medicine - D.M.</option>
        <option>Master of Architecture - M.Arch.</option>
        <option>Master of Arts - M.A.</option>
        <option>Master of Business Administration - M.B.A.</option>
        <option>Master of Chirurgiae - M.Ch.</option>
        <option>Master of Commerce - M.Com.&nbsp;&nbsp; &nbsp;</option>
        <option>Master of Computer Applications - M.C.A.</option>
        <option>Master of Dental Surgery - M.D.S.</option>
        <option>Master of Design - M.Des./ M.Design.</option>
        <option>Master of Education - M.Ed.</option>
        <option>Master of Engineering / Master of Technology - M.E./ M.Tech.</option>
        <option>Master of Fine Arts - MFA / MVA</option>
        <option>Master of Laws - L.L.M.</option>
        <option>Master of Library Science - M.Lib./ M.Lib.Sc.</option>
        <option>Master of Mass Communications / Mass Media - M.M.C / M.M.M.</option>
        <option>Master of Pharmacy - M.Pharm&nbsp;&nbsp; &nbsp;</option>
        <option>Master of Philosophy - M.Phil.&nbsp;&nbsp; &nbsp;</option>
        <option>Master of Physical Education M.P.Ed. / M.P.E.</option>
        <option>Master of Physiotherapy - M.P.T.</option>
        <option>Master of Science - M.Sc.</option>
        <option>Master of Social Work / Master of Arts in Social Work - M.S.W. / M.A. (SW)</option>
        <option>Master of Science in Agriculture - M.Sc. (Agriculture)</option>
        <option>Master of Surgery - M.S.</option>
        <option>Master of Veterinary Science - M.V.Sc.</option>
    </select>
    </div>
    <h3>WORK EXPERIENCE:</h3>
    <div class="form-group">
        <textarea class="form-control" name="experience" id="experience" cols="20" rows="5" placeholder="Work Experience.." required></textarea>
     </div>
     <h3>DECLARATION:</h3>
     <div class="form-group">
     <input type="checkbox" required>&nbsp;&nbsp;&nbsp;I do hereby declare that all above information furnished by me are true complete and correct of my knowledge.
     </div>
     <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Submit">
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

            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email =$_POST['email'];
            $gender=$_POST['gender'];
            $country=$_POST['country'];
            $martial=$_POST['martial'];
            $language=$_POST['language'];
            $qualification=$_POST['qualification'];
            $experience=$_POST['experience'];

            $sql=" INSERT INTO resume (fname,lname,email,gender,country,martial,language,qualification,experience)
                    VALUES ('$fname','$lname','$email','$gender','$country','$martial','$language','$qualification','$experience')";
            if (mysqli_query($conn,$sql))
            {
                echo '<script type="text/javascript">';
                echo 'swal("Good!","Resume Posted Successfully","success")';
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