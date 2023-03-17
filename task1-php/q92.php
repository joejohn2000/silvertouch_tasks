<?php
function test($array)
 { 
    $max=max($array);
    return [$max, $max, $max,$max];
    
 }   
echo "New array with maximum values : ";
 print_r(test([10, 20, -30, -40 ])). "<br>";

 ?>