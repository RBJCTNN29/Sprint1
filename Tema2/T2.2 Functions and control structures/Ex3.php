<?php
    function count_to_given_number($number) {
        $current_num = 0;
        while ($current_num != ($number + 1)) {
            echo $current_num . "<br/>";
            $current_num += 1;
        }
    }
    echo "Aquesta funcio compta fins al nombre donat com a argument (parametre). Per exemple escollim el 13" . "<br/>";
    echo count_to_given_number(13);
?>