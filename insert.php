<?php
include('db.php');
session_start();
$fac = $_SESSION['fac_id'];
$sup = $_SESSION['sup_id'];


 if(isset($_POST['save'])){
     //$sql = "INSERT INTO `users`(`email`, `username`, `pass`) VALUES ('{$_POST['email']}','{$_POST['username']}','{$_POST['pass']}') ";
     $sql = "INSERT INTO `leave_application`(`reason`, `leave_type`, `ffrome`, `tto`, `fac_id`, `sup_id`,`approval`) VALUES ('{$_POST['reason']}','{$_POST['leave_type']}','{$_POST['from']}','{$_POST['to']}','$fac','$sup','0')";
    
    if(mysqli_query($connect,$sql)){
        echo "Your Application is Submitted"."<br>";
        echo "<a href = 'home.php'>ChecK In</a>";
        
    }
    else echo "Apllication is not Submitted";
    
     
 }
?>