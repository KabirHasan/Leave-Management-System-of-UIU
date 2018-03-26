<html>
    <?php include('db.php');
    $val = $_GET['id'];
    echo $val;
    $sql = "UPDATE `leave_application` SET `approval`= '2' WHERE id = '$val' ";
    if( mysqli_query($connect,$sql) ){
        header('location:supervisors.php');
    }
    ?>
    <body>
        
    </body>
</html>