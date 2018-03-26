<?php
include('db.php');
session_start();

 if(isset($_POST['save'])){
   
    
    $sql = "SELECT * FROM users WHERE username ='{$_POST['user']}' AND pass ='{$_POST['pass']}'";
     
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
   
    if($row > 0){
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
       
       
        header('location:form.php');
    }
    else{
        echo "Invalid";
    }
     
    
    
     
 }
?>