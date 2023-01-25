<?php
    function count_to_ten_in_twos($default_value = 10) {
        $current_num = 0;
        while ($current_num != 12) {
            echo $current_num . "<br/>";
            $current_num += 2;
        }
    }
    echo count_to_ten_in_twos();
?>