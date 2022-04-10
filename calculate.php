<?php
echo "<pre>"; //To arrange the printing of the post from the previous page
print_r($_POST);

calc($_POST["num1"], $_POST["num2"], $_POST["operate"]);

function calc($num1, $num2, $operation){
    if($operation == "sum"){
        $result = $num1 + $num2;
    }else if($operation == "sub"){
        $result = $num1 - $num2;
    }else if($operation == "multip"){
        $result = $num1 * $num2;
    }else if($operation == "divis"){
        $result = $num1 / $num2;
    }
    echo "result = ", $result;

}


//نستخدم داي لتوقيف البرنامج عند الطباعه او السطر هذا للبحث عن الاخطاء
// echo $_POST["operate"];
// die();

?>