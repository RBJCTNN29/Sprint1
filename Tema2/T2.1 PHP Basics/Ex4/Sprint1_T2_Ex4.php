<?php
    $int_x = 1;
    $int_y = 2;
    $dbl_n = 1.5;
    $dbl_m = 2.5;
    echo $int_x, $int_y, ($int_x + $int_y), 
        ($int_x - $int_y), ($int_x * $int_y), 
        ($int_x % $int_y);
    echo (2 * $dbl_n), (2 * $dbl_m),
        ($int_x + $int_y + $dbl_n + $dbl_m),
        ($int_x * $int_y * $dbl_n * $dbl_m);
?>