<?php


?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <div>
            <?php
            //Check if user click Submit or not 
            if(isset($_POST["dologin"]) && !empty($_POST["dologin"])) {
                //Check if user type username and password or not
                if(isset($_POST["username"]) && !empty($_POST["username"])) {
                    echo "OK";
                } else {
                    echo "You should enter username";
                }
                
            } else {
                ?>
            
            <form action="" method="POST" id="loginform" name="loginform">
            <label for="username">UserName</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br><br>
            <input type="hidden" id="dologin" name="dologin" value="1">
            <button type="submit" name="submit" value="submit">Login</button>
            </form>
            <?php } ?>
        </div>
    </body>

</html>