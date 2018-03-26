<?php
include('db.php');
$val = $_POST['status'];
$q = 4;
if($val == 'vc') $q = 1;
if($val == 'provc') $q = 2;
if($val == 'head') $q = 3;


 if(isset($_POST['save'])){
     $sql = "INSERT INTO `users`(`name`,`email`, `status`, `username`,`pass`) VALUES ('{$_POST['name']}','{$_POST['email']}','$q','{$_POST['user']}','{$_POST['pass']}') ";
    
    if(mysqli_query($connect,$sql)){
        if($q == 4){
            $temp = 3;
            $sql = "INSERT INTO `faculties`(`name`, `email`, `supervisor_id`) VALUES ('{$_POST['name']}','{$_POST['email']}','$temp')";
            mysqli_query($connect,$sql);
        }
        else{
            if($q == 3)
            $temp = 2;
            if($q == 2)
            $temp = 1;
            if($q == 1)
            $temp = 1;
            $sql = "INSERT INTO `faculties`(`name`, `email`, `supervisor_id`) VALUES ('{$_POST['name']}','{$_POST['email']}','$temp')";
            mysqli_query($connect,$sql);
            $sql = "INSERT INTO `supervisors`(`name`, `status`, `email`) VALUES ('{$_POST['name']}','{$_POST['status']}','{$_POST['email']}')";
            mysqli_query($connect,$sql); 
        }
        echo "Your account is Created"."<br>";
        echo "<a href = 'first_page.php'>Sign In</a>";
        
    }
    else echo "Account is not Created";
    
     
 }
?>