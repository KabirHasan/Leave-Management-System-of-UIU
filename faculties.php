<html>
    <?php include('db.php');
    session_start();
    echo "Well Come Mr".$_SESSION['name'];
    $_SESSION['email'] = $_SESSION['email'];
    ?>
    <body>
        <span>List of Applications Reports</span> <a href="form.php">Application</a>
    </body>
</html>