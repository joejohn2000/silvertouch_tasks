<?php
function test($array)
 { 
       return [$array[1], $array[2], $array[3], $array[0]];
    
 }   
echo "rotated array :";
 print_r(test([10, 20, 30, 40 ])). "<br>";

 ?>