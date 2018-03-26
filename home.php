<html>
    <?php
    include('db.php');
    $sql = "SELECT * FROM `leave_application`";
    $result = mysqli_query($connect,$sql);
    ?>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="head">
        <img src="img/logo.jpg" style="float:left;">
        <p id="uiu"><b><span style="font-family:cursive;">United International University</span></b><br><span style="color:green;"><i>Quest for Excellence</i></span></p></div>
        <p id="line">Leave Application of uiu</p>
        <div id="des">
        <ul>
        <?php while($row = mysqli_fetch_assoc($result)) {
        $sup = $row['sup_id'];
        $fac = $row['fac_id'];
        $sql = "SELECT * FROM `supervisors` WHERE id = '$sup' ";
        $result2 = mysqli_query($connect,$sql);
        $row2 = mysqli_fetch_assoc($result2);
        $sql = "SELECT * FROM `faculties` WHERE id = '$fac' ";
        $result3 = mysqli_query($connect,$sql);
        $row3 = mysqli_fetch_assoc($result3);
        ?>
            <li>Application To <span style="color: darkblue;"><?=$row2['name']?></span> From <span style="color: blueviolet;"><?=$row3['name']?></span> for <span style="color: burlywood;"><?=$row['ffrome']?> to <?=$row['tto']?></span> is <?php
            if($row['approval']=='0'){
                echo 'Pending';
            }
            else if($row['approval'] == '1'){
                echo 'Approved';
            }
            else{
                echo 'Denied';
            }
            ?></li>
        <?php } ?>
        </ul>
        </div>
        <a id="a" target="_blank" href="first_page.php">Application</a><br><a target="_blank" id="b" href="first_page2.php">Supervisors</a>
    </body>
</html>