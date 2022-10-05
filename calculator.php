<?php session_start();?>
<html>
    <head><title>Calculator</title></head>
    <body>
        <!-- to ensure this user allow to enter and access -->
        <?php if(isset($_SESSION["role"]) && $_SESSION["role"] == 'user') { ?>
            <?php echo 'This name from "session" -> '. $_SESSION['username']; ?>
            <br>
            <a href="signOut.php" target="_blank">SignOut</a>
            <br><br>
            <form action="calculate.php" method="post">
                <label for="num1">Number1 :</label>
                <input type="number" name="num1" id="num1">
                <br><br>
                <label for="num2">Number2 :</label>
                <input type="number" name="num2" id="num2">
                <br><br>
                <label for="operate">Operate :</label>
                <select name="operate" id="operate">
                    <option value="sum">Sum +</option>
                    <option value="sub">Sub -</option>
                    <option value="multip">Multiple *</option>
                    <option value="divis">Division /</option>
                </select>
                <br><br>
                <button type="submit" name="submit" value="submit">calculate</button>

            </form>
        <?php } else { echo "You are not allowed enter this page"; } ?>
    </body>


</html>