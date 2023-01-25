<?php 
    function even_or_odd($number) {
        if($number % 2 == 0) {
            echo "El nombre es parell" . "<br/>";
        }
        else {
            echo "El nombre es imparell" . "<br/>";
        }
    }
    echo "Aquesta funcio ens diu si un nombre es parell o imparell" . "<br/>";
    $num1 = 29;
    echo "El primer nombre es el 29" . "<br/>";
    echo even_or_odd($num1);
    $num2 = 30;
    echo "El segon nombre es el 30" . "<br/>";
    echo even_or_odd($num2);
?>