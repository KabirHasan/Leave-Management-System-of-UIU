<html>
    <?php
    session_start();
    ?>
    <head>
        <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
     <body>
         <p id="cre">Creat Your Account Here......! </p><br>
         <div class="sign_up">
        <form action = "userInsert.php" method="post" onSubmit="return check()">
            <table>
                <tr><td><b>Name</b></td><td>:</td><td><input id="name" type="text" name="name"><span class="red" id="name"></span></td></tr> <br>
                <tr><td><b>Email</b></td><td>:</td><td><input id="email" type="text" name="email"><span class="red" id="eemail"></span></td></tr> <br>
                <tr><td><b>Status</b></td><td>:</td><td><select id="status" name="status">
                    <option value="sts" selected="selected">Select Your Status</option>
                    <option value="vc">VC</option>
                    <option value="provc">Pro VC</option>
                    <option value="head">Head of Dept</option>
                    <option value="faculty">Faculty</option>
                    </select><span class="red" id="sstatus"></span></td></tr> <br>
                <tr><td><b>Username</b></td><td>:</td><td><input id="user" type="text" name="user"><span class="red" id="uuser"></span></td></tr> <br>
                <tr><td><b>Password</b></td><td>:</td><td><input id="pass" type="password" name="pass"><span class="red" id="ppass"></span></td></tr> <br>
                <tr><td></td><td></td><td><input type="submit" value="Sign UP !" name="save"></td></tr>
            </table>
         </form>
        </div>
        <script>
            function check(){
                var x = 1;
                var name = document.getElementById("name");
                var email = document.getElementById("email");
                var pass = document.getElementById("pass");
                var user = document.getElementById("user");
                var sts = document.getElementById("status");
               
                //var filter = /^[A-Za-z0-9]+@[A-Za-z]+.[A-Za-z]$/;
              
                if(name.value.length == 0){
                    document.getElementById("name").innerHTML = "Name Can't be black";
                    x = 0;
                }

                if(user.value.length == 0){
                    document.getElementById("uuser").innerHTML = "username Can't be black";
                    x = 0;
                }
                if(email.value.length == 0){
                    document.getElementById("eemail").innerHTML = "email Can't be black";
                    x = 0;
                }
                /*else if(!filter.test(email.value)){
                    x = 0;
                    document.getElementById("eemail").innerHTML = "Not a valid email";
                }*/
                if(sts.value == "sts" ){
                    x = 0;
                    document.getElementById("sstatus").innerHTML = "Select Your Status";
                }
                
                if(pass.value.length < 3){
                    x = 0;
                    document.getElementById("ppass").innerHTML = "Password must be atleast 3"
                } 
                
                if(x == 1) return true;
                return false;
                
                
            }
        </script>
       
    </body>
</html>