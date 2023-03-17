
<?php
function test($array)
 { 
    
    $temp=$array[0];
    $array[0]=$array[sizeof($array)-1];
    $array[sizeof($array)-1]=$temp;
    return $array;

    
    
 }   

print_r(test([ 1, 5, 7, 9, 11, 13  ])). "<br>";



?>


