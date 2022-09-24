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
            if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty(["password"])) {
                echo"Code will be here";
            } else {
                ?>
            
            <form action="" method="POST" id="loginform" name="loginform">
            <label for="username">UserName</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br><br>
            <button type="submit" name="submit" value="submit">Login</button>
            </form>
            <?php } ?>
        </div>
    </body>

</html>