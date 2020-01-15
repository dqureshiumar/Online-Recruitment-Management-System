<?php
                      
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="orms";

                $conn=mysqli_connect($servername,$username,$password,$dbname);
                $query=("SELECT * FROM final");
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_array($result);
                $id=$row[0];

                if(!$conn){
                    die("connection failed:" . mysqli_connect_error());
                }
                $id = $_GET['id'];
                $sql="DELETE from final WHERE id='$id'";
                mysqli_query($conn,$sql);
              //  header("location:final.php");
?>