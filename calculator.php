<?php session_start();?>
<html>
    <head><title>Calculator</title></head>
    <body>
        <?php echo 'This name from "session" -> '. $_SESSION['username']; ?>
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
    </body>


</html>