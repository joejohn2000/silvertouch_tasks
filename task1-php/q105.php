
<?php
function test($array)
 { 
    
    if( sizeof($array)<2 )
    {
        return $array;
    }
    else
    {
        return [$array[0],$array[1]];
    }

    
    
 }   

print_r(test([ 1, 5, 7, 9, 11, 13  ])). "<br>";



?>


