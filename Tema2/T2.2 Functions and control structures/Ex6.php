<?php
    function isBitten() {
        $random = rand(0, 100);
        $boolean_output = false;
        if($random  % 2 == 0) {
            $boolean_output = $random? "TRUE" : "FALSE";
        }
    }
    echo isBitten();
?>