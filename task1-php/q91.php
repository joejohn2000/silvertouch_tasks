<?php
function test($array)
 { 
       return array_reverse($array);
    
 }   
echo "reversed array :";
 print_r(test([10, 20, -30, -40, 50 ])). "<br>";

?>