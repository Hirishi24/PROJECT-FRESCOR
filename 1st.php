<?php
$servername="localhost";
 $username="root";
 $password="sridha@17";



 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn){
    die("failed" .mysqli_connect_error());
 }
 $sql ="create database satya1";
 if(mysqli_query($conn,$sql)){
    echo"db created";
 }
 else{
    echo"error in creating".mysqli_error($conn);
 }

 mqsqli_close($conn);
?>