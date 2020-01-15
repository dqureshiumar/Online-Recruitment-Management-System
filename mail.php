<?php
echo '<title>Send Confirmation Mail</title>';
include 'plugins.php';
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  //send email
  mail($email, "$subject", $comment,$headers);
  
                                echo '<script type="text/javascript">';
                                echo 'swal("Mail Sent","Successfully","success")';
                                echo '</script>';  
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<div class ="container">
 <form method="post">

  Email: <input name="email" class="form-control" type="email" required/><br>

  Subject: <input name="subject" class="form-control" type="text" required/><br>

  Message:

  <textarea name="comment" class="form-control" rows="15" cols="40" required></textarea><br>

  <input type="submit" class="btn btn-primary" value="Submit" />
  </form>
  
<?php
  }
?>