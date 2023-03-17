<?php
function test($array)
 { 
    return $array[0] != 15 && $array[0] != 20 && $array[1] != 15 && $array[1] != 20;

    
    
 }   

 echo var_dump(test([ 12, 20 ])). "<br>";
 echo var_dump(test([ 14, 15  ])). "<br>";
 echo var_dump(test([ 11, 21  ])). "<br>";


?>