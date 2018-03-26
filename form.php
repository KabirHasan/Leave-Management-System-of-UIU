<html>
    <?php
    include('db.php');
    session_start();
    $val = $_SESSION['email'];
    $sql = "SELECT * FROM `faculties` WHERE email = '$val' ";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $faculty_name = $row['name'];
    
    $val2 = $row['supervisor_id'];
    $st = 'head';
    if($val2 == 1){
        $st = 'vc';
    }
    if($val2 == 2) $st = 'provc';
    
    $sql = "SELECT * FROM `supervisors` WHERE status = '$st' ";
    $result = mysqli_query($connect,$sql);
    $row2 = mysqli_fetch_assoc($result);
    
    
    $_SESSION['fac_id'] = $row['id'];
    $_SESSION['sup_id'] = $row2['id'];
    
    ?>
    <head>
        <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p style="margin: 0 0 0 130px;color: darkblue;font-family: cursive;font-size: 20;">Hi... <?= $row['name'] ?><br>Fill UP Your Form</p>
        <div class='sign_up'>
        <form action="insert.php" method="post">
            <table>
                <tr><td>Reason</td><td>:</td><td><input type="text" name="reason"></td></tr><br>
                <tr><td>Leave Type</td><td>:</td><td><select  name="leave_type">
                    <option value="short" selected="selected">Short</option>
                    <option value="long">Long</option>
                    </select></td></tr><br>
                <tr><td>From</td><td>:</td><td><input type="text" value="dd-mm-yy" name="from"></td><td>To</td><td>:</td><td><input type="text" value="dd-mm-yy" name="to"></td></tr>
                <tr><td>Facutly</td><td>:</td><td><?php echo $row['name'] ?></td></tr>
                <tr><td>Supervisor</td><td>:</td><td><?php echo $row2['name'] ?></td></tr>
                <tr><td><input type="submit" value="Submit" name = 'save'></td></tr>
            </table>
        </form>
        </div>
    </body>
</html>