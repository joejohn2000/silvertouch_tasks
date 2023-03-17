<?php
function test($array1,$array2)
 { 
    return [$array1[2],$array2[2]];
    
 }   

 print_r(test([ 10, 20, -30, -40, 30 ], [ 10, 20, 30, 40, 30 ])). "<br>";


?>