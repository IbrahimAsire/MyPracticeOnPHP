<?php
echo "<pre>"; //To arrange the printing of the post from the previous page
print_r($_POST);

if($_POST["operate"] == "sum"){
    $result = $_POST["num1"] + $_POST["num2"];
    echo "result = ", $result;
}else if($_POST["operate"] == "sub"){
    $result = $_POST["num1"] - $_POST["num2"];
    echo "result = ", $result;
}else if($_POST["operate"] == "multip"){
    $result = $_POST["num1"] * $_POST["num2"];
    echo "result = ", $result;
}else if($_POST["operate"] == "divis"){
    $result = $_POST["num1"] / $_POST["num2"];
    echo "result = ", $result;
}

//نستخدم داي لتوقيف البرنامج عند الطباعه او السطر هذا للبحث عن الاخطاء
// echo $_POST["operate"];
// die();

?>