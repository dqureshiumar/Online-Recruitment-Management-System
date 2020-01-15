<?php  
 mysqli_close($conn);
//logout.php  
 session_start();  
 session_destroy();  
 header("location: index.php"); 
?>  