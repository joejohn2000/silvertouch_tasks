<?php
function test($array1,$array2)
 { 
    return sizeof($array1) > 0 && sizeof($array2) > 0 && 
    $array1[0] == $array2[0] || $array1[sizeof($array1) - 1 ] == $array2[sizeof($array2) - 1 ];
    
 }   

echo var_dump(test([10, 20, 40, 50], [10, 20, 40, 50])). "<br>";
echo var_dump(test([10, 20, 40, 10], [10, 20, 40, 5])). "<br>";
echo var_dump(test([12, 24, 35, 55], [1, 20, 40, 5])). "<br>";

?>