<html>
    <body>
    
    <?php include('db.php');
    session_start();
    $val = $_SESSION['email'];
    $temp = "SELECT * FROM supervisors WHERE email = '$val' ";
    $result = mysqli_query($connect,$temp);
    $row = mysqli_fetch_assoc($result);
    $val2 = $row['id'];
    
    $sql = "SELECT * FROM `leave_application` WHERE sup_id = '$val2' ";
    $result = mysqli_query($connect,$sql);
    
    ?>
    <p style="color: cadetblue;font-size:20;font-family: cursive;margin:0 0 0 200px;">Hi.... <?= $row['name'] ?>, Please Approve or Deny the applications</p>
    <ol>
        <?php while($row = mysqli_fetch_assoc($result)) {
        $tt = $row['fac_id'];
        $sql = "SELECT * FROM `faculties` WHERE id = '$tt'  ";
        $result2 = mysqli_query($connect,$sql);
        $row2 = mysqli_fetch_assoc($result2);
        ?>
        <li style="margin:0 0 0 200px;font-family: cursive;"><span style="color: cadetblue;"><?=$row2['name'] ?></span> Ask You for <?=$row['ffrome'] ?> to <?=$row['tto'] ?> days leave... <a style="color: green;" href="appro.php?id=<?=$row['id'] ?>">Approve</a> <a style="color: red;" href="deny.php?id=<?=$row['id'] ?>">Deny</a></li>
        <?php } ?>
    </ol>
    </body>
</html>