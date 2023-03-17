<?php
function test($array1,$array2)
{
   
    if(array_sum($array1)>array_sum($array2))
    {
        return $array1;
    }
    else
    {
        return $array2;
    }

    
}   

echo var_dump(test([10, 20, -30 ], [10, 20, 30 ])). "<br>";


?>