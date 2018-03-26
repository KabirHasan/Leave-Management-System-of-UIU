<html>
    <?php
    include('db.php');
   
    ?>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <span id="sign">Sign In Form</span>
        <div id="sign_form">
        <span><i>Enter Your username and password</i></span>
        <form action = "sign_in.php" method="post">
            <table>
                <tr><td><b>Username</b></td><td>:</td><td><input type="text" name="user"></td></tr> <br>
                <tr><td><b>Password</b></td><td>:</td><td><input type="password" name="pass"></td></tr> <br>
                <tr><td></td><td></td><td><input type="submit" value="Sign IN !" name="save"></td></tr>
            </table>
        </form>
        </div>
        <div id="bottom">
        <p style="color:green">Haven't a account, then Sign UP</p>
        <a href="sign_up.php">Creat a Account</a></div>
        
       
    </body>
</html>