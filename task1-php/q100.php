
<?php
function test($array)
 { 
    
    return [$array[(sizeof($array)-1)/2],$array[((sizeof($array)-1)/2)+1]];

    
    
 }   

print_r(test([ 1, 5, 7, 9, 11, 13  ])). "<br>";



?>


