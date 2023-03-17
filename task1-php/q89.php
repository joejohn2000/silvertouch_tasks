<?php
function test($array)
{
   
    return  array_sum($array);

    
}   

echo var_dump(test([10, 20, 30, 40, 50 ])). "<br>";
echo var_dump(test([10, 20, -30, -40, 50 ])). "<br>";

?>