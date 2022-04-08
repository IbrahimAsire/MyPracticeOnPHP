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
echo "<br>______________________<br>"
?> 

<html>
    <head><title>TABLE</title></head>
    <body>
        <table border="2">
            <tr>
                <th>No.</th>
                <th colspan="10">Mobile No.</th>
            </tr>

            <?php 
            for($i=1; $i<=10; $i++){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <?php
                    for($j=1; $j<=10; $j++){
                        ?>

                        <td><?php echo $j; ?></td>
                    <?php } ?>
                    </tr>

                <?php } ?>

        </table>
    </body>
</html>