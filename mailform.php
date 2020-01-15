<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'plugins.php'; ?>
    <script src="js/sweetalert.min.js"></script>

</head>
<body>
<div class="container">
<div class="col-lg-12">
                        <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST"">
                        <div class="row" >
                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Company Name *" id="name" required>
                                </div> -->
                                <div class="form-group">
                                    <input type="email" name="uemail" class="form-control" placeholder="User Email *" id="uemail" required>
                                </div>
                                <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject*" id="subject" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message *" id="message" required ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                            
                                <input type="submit" class="btn btn-primary" value="Send Mail">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                        <?php
                        if(isset($_REQUEST['submit']))
                        {
                            $to = $_REQUEST['uemail'];
                            //$name = $_POST['name'];
                            $subject = $_REQUEST['subject'];
                            $message = $_REQUEST['message'];
                        
                            $headers = 'From: webmaster@example.com' . "\r\n" .
                            'Reply-To: webmaster@example.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                            mail($to,$subject,$message,$headers);
                            if(mail($to,$subject,$message,$headers))
                            {
                                echo '<script type="text/javascript">';
                                echo 'swal("Mail Sent","Successfully","success")';
                                echo '</script>';  
                            }

                            else{
                                echo '<script type="text/javascript">';
                                echo 'swal("Failed","Mail not sent","error")';
                                echo '</script>';  
                            }
                        }
                            ?>
                                
</body>
</html>