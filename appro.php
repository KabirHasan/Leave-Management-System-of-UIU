<html>
    <?php include('db.php');
    $val = $_GET['id'];
    $sql = "UPDATE `leave_application` SET `approval`= '1' WHERE id = '$val' ";
    if( mysqli_query($connect,$sql) ){
        header('location:supervisors.php');
    }
    ?>
    <body>
        
    </body>
</html>