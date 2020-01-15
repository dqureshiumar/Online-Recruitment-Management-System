<?php  
 //logout.php
 mysqli_close($conn);
 session_start();  
 session_destroy();  
 header("location: index.php");  
?>