<!-- should on me review all this again and again and again  -->
<?php
// To make sure that the form contains numbers
if(isset($_POST['num1']) && isset($_POST['num2']) && !empty($_POST['num1']) && !empty($_POST['num2'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operate'];

    echo $operation. "<br>";

    // To make sure that the input is number(int)
    if(is_int($_POST['num1']) && is_int($_POST['num2'])){
        /*if($operation == 'sum'){
            $cal_values = $num1 + $num2;
        } else if($operation == 'sub'){
            $cal_values = $num1 - $num2;
        } else if($operation == 'multip'){
            $cal_values = $num1 * $num2;
        } else{
            $cal_values = $num1 / $num2;
        }*/

        // Using switch:
        switch($operation){
            case 'sum':
                $cal_values = $num1 + $num2;
                break;
            case 'sub' :
                $cal_values = $num1 - $num2;
                break;
            case 'multip':
                $cal_values = $num1 * $num2;
                break;
            default:
                $cal_values = $num1 / $num2;
                break;
        }

        echo $cal_values;
    } else{
        echo "Plz enter numberic value";
    }
} else{
    echo "Plz enter numbers";
}
?>