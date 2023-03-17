<?php
function test($array)
 { 
    return  ($array[0] == 20 && $array[1] == 20) || ($array[0] == 10 && $array[1] == 10);

    
    
 }   

 echo var_dump(test([ 12, 20 ])). "<br>";
 echo var_dump(test([ 20, 20  ])). "<br>";
 echo var_dump(test([ 10, 10   ])). "<br>";
 echo var_dump(test([ 10 ])). "<br>";


?>