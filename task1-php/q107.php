
<?php
function test($array)
 { 
    
    return max($array)-min($array);
    
 }   
echo "Difference between the largest and smallest values: ";
echo(test([ 1, 5, 7, 9, 10, 12 ])). "<br>";



?>

