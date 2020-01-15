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

    <title>Post a Job</title>
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
     
     <!-- Navigation -->
     <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top bg-dark navbar-primary">
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
                        <a class="page-scroll" href="searchemployee.php">Search for an Employee</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Paste a Job</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#register">Register</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="adminlogout.php">Logout</a>
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
                <div class="intro-lead-in">Register Now!!</div>
                <div class="intro-heading">Register as a Job seeker or a Job Provider!</div>
                <a href="#register" class="page-scroll btn btn-xl">Go Register</a>
            </div>
        </div>
    </header> -->
    <section id="register">
    <div class="container">
    <div id="main">
    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
            <div class="form-group">
    <label for="Cateogary">Cateogary:</label>
    <input class="form-control" type="text" name="cateogary" id="cateogary" placeholder="Cateogary of job.." required>
</div>
     <div class="form-group">
        <label for="Title">Title</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="Tilte..">
    </div>
    <div class="form-group">
        <label for="company">Company Name</label>
        <input class="form-control" type="text" name="company" id="company" placeholder="Company..">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="20" rows="5" required placeholder="Description in form of sentences"></textarea>

     </div>
     <div class="form-group">
        <label for="experience">Experience Required</label>
        <input class="form-control" type="text" name="experience" id="experience" placeholder="Eperience in years..">
    </div>
    <div class="form-group">
    <label for="qualification">Qualification Required:</label>
    <select class="form-control" id="qualification" name="qualification" required>
      <!-- <option value="ssc">Passed from Maharashtra Board</option>
      <option value="married"></option>
      <option value="divorced">Divorced</option> -->
      <option>Bachelor of Architecture - B.Arch</option>
        <option>Bachelor of Arts - B.A.</option>
        <option>Bachelor of Ayurvedic Medicine &amp; Surgery - B.A.M.S.</option>
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
    <div class="form-group">
        <label for="location">Location of Job</label>
        <input class="form-control" type="text" name="location" id="location" placeholder="Location..">
    </div>
        <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email.." required>
         </div>
        
        <!-- <div class="form-group">
                <label for="confirm">Confirm Email </label>
                <input class="form-control" type="email" name="confirm" id="confirm" required>
            </div> -->
            <div class="form-group">
                <label for="contactno">Contact no:</label>
                <input class="form-control" type="text" name="contact" id="contact" placeholder="Contact.." required>
            </div>
            <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary" value="Paste">
            </div>
        </form>
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="orms";
                $sessionid= session_id();
                //create connection
                $conn=mysqli_connect($servername,$username,$password,$dbname);
                //check connection
                if(!$conn){
                    die("connection failed:" . mysqli_connect_error());
                }
                $uniqid=uniqid();
                $sessionid= session_id();
                $cateogary=$_POST['cateogary'];
                $title =$_POST['title'];
                $company =$_POST['company'];
                $description=$_POST['description'];
                $experience=$_POST['experience'];
                $qualification=$_POST['qualification'];
                $location=$_POST['location'];
                $email=$_POST['email'];
                $contact=$_POST['contact'];

                $sql=" INSERT INTO adminpastejob (sessionid,cateogary,company,title,description,experience,qualification,location,email,Contact)
                        VALUES ('$sessionid','$cateogary','$company','$title','$description','$experience','$qualification','$location','$email','$contact')";
                if (mysqli_query($conn,$sql))
                {
                    echo '<script type="text/javascript">';
                    echo 'swal("Good!","Job Posted Successfully","success")';
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

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>
</html>
