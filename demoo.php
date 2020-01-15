<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select pagewa</title>
    <?php include 'plugins.php'; ?>
</head>
<body>
<?php
$id=session_id();  //store 10 in id variable
$_SESSION['id'] = $id;  // now, store $id i.e, 10 in  Session variable named id. 

echo $_SESSION['id'];   // now, print the Session variable.
?>
<?php 
session_destroy();
?>
    
</body>
</html>