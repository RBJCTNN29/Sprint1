<?php
$array1 = [ "ccc", "dddd", "a", "bb"];
$array2 = ["1", "4444", "22", "333"];
$array3 = ["cat", "mouse", "terrier", "falcon"];
$matrix1 = [$array1, $array2, $array3];
function sort($matrix) {
    return array_multisort(array_map("strlen", $array), $array);
                
}
    
echo sort($matrix);
?>