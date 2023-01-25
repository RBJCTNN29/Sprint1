<?php
    function count_to_ten_in_twos() {
        $current_num = 0;
        while ($current_num != 12) {
            echo $current_num;
            $current_num += 2;
        }
    }
    echo count_to_ten_in_twos();
?>