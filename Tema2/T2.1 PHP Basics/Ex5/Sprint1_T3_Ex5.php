<?php
    $array_1 = array(0, 1, 2, 3, 4);
    $array_2 = [5, 6, 7];
    array_push($array_2, 8);
    print_r(count(array_merge($array_1, $array_2)));
    print_r(array_merge($array_1, $array_2));
?>