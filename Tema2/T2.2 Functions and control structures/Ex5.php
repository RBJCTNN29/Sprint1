<?php
    function determine_division($grade = 60) {
        $division = "";
        if($grade >= 60) {
            $division = "Primera Divisio";
        } else if(($grade < 60 <) and ($grade >= 45)) {
            $division = "Segona Divisio";
        } else if(($grade < 45) and ($grade >= 33)) {
            $division = "Tercera Divisio";
        } else {
            $division = "L'estudiant ha de reprovar";
        }
        echo $division . "<br/>";
    }
    echo "Aquesta funcio assigna una divisio a l'estudiant segons la seva nota. Posem l'exemple que te per defecte una nota del 60%" . "<br/>";
    echo count_to_ten_in_twos();
?>