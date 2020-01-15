
<?php
$to      = $_POST['uemail'];
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


   if( mail($to, $subject, $message, $headers))
{
    echo "sent";
}
else echo "fail";
?> 
