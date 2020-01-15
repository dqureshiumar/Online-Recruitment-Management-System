<?php

 if(isset($_POST) && !empty($_POST)) {
 if(!empty($_FILES['attachment']['name'])) {
   $file_name = $_FILES['attachment']['name'];  
   $temp_name = $_FILES['attachment']['tmp_name'];  
   $file_type = $_FILES['attachment']['type'];

   $base = basename($file_name);
   $extension = substr($base, strlen($base)-4, strlen($base));

   //only these file types will be allowed
   $allowed_extensions = array(".doc", "docx", ".pdf", ".zip", ".png", ".pptx");

   //check that this file type is allowed
   if(in_array($extension,$allowed_extensions)) {
       //mail essentials
       $from = $_POST['user_mail'];
       $to = "dqureshiumar@gmail.com";
       $subject = $_POST['user_name'];
       $message = $_POST['user_message'];

       //things u need
       $file = $temp_name;
       $content = chunk_split(base64_encode(file_get_contents($file)));
       $uid = md5(uniqid(time()));  //unique identifier

       //standard mail headers
       $header = "From: ".$from."\r\n";
       $header .= "Reply-To: ".$from. "\r\n";
       $header .= "MIME-Version: 1.0\r\n";


       //declare multiple kinds of email (plain text + attch)
       $header .="Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n";
       $header .="This is a multi-part message in MIME format.\r\n";

       //plain txt part

       $header .= "--".$uid."\r\n";
       $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
       $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
       $header .= $message. "\r\n\";


       //attch part
       $header .=  $uid.\r";
       $header .= "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
       $header .= "Content-Transfer-Encoding: base64\r\n";
       $header .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n";
       $header .= $content."\r\n";  //chucked up 64 encoded attch


       //sending the mail - message is not here, but in the header in a multi part

       if(mail($to, $subject,$message, $header)) {
       echo "success";
       }else {
           echo "fail";
       }


   }else {
       echo "file type not allowed"; }    //echo an html file
}else {
  echo "no file posted"; }    
}
?>