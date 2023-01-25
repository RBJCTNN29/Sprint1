<?php
    function isBitten() {
        $random = rand(0, 100);
        $boolean_output = "";
        if($random  % 2 == 0) {
            $boolean_output = "TRUE";
        } else {
            $boolean_output = "FALSE;"
        }
        echo $boolean_output;
    }
    echo isBitten();
?>