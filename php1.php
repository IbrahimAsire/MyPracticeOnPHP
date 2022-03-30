<!DOCTYPE html>
<html>
<body><title> HI </title>

<?php
$greet = "Hello PHP!";
echo $greet;
echo '<br>';
define("Greeting", "<br>Welcome<br> to<br> PHP!<br><br>");
echo Greeting;
echo "<br> --------------------------<br>";
$arrayList = array("Ibrhim", "Ahmed", "Asiri");
foreach($arrayList as $arr){
    echo $arr."<br>";
}

?> 

</body>
</html>