<?php 
    function even_or_odd($number) {
        if($number % 2 == 0) {
            echo "El nombre es parell";
        }
        else {
            echo "El nombre es imparell";
        }
    }
    echo "Aquesta funcio ens diu si un nombre es parell o imparell";
    $num1 = 29;
    echo "El primer nombre es el 29";
    echo even_or_odd($num1);
    $num2 = 30;
    echo "El segon nombre es el 30";
    echo even_or_odd($num2);
?>