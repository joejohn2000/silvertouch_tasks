<?php
function test($array)
 { 
       return sizeof($array) > 0 && ($array[0] ==  $array[sizeof($array) - 1 ]);
    
 }   

echo var_dump(test([10, 20, 40, 50])). "<br>";
echo var_dump(test([5, 20, 40, 10])). "<br>";
echo var_dump(test([10, 20, 40, 10])). "<br>";
echo var_dump(test([12, 24, 35, 55])). "<br>";
?>