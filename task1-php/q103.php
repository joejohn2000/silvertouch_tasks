
<?php
function test($array)
 { 
    
    if( sizeof($array)>=3 )
    {
        return [$array[(sizeof($array)-1)/2],$array[(sizeof($array)-1)/2+1],$array[(sizeof($array)-1)/2+2]];
    }

    
    
 }   

print_r(test([ 1, 5, 7, 9, 11, 13  ])). "<br>";



?>


