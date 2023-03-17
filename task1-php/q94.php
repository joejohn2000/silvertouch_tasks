<?php
function test($array)
 { 
    return [$array[0],$array[sizeof($array) - 1 ]];
    
 }   

 print_r(test([ 10, 20, -30, -40, 30 ])). "<br>";


?>