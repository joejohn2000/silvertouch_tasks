<?php
function test($array1,$array2)
{
    
    return array_merge($array1,$array2);

    
}   
echo "new array : ";
print_r(test([10, 20,30 ], [40, 50, 60  ])). "<br>";


?>