
<?php
function test($array)
 { 
    for ($i = 0; $i < sizeof($array) - 1; $i++)
    {
        if ($array[$i] == 5 && $array[$i + 1] == 7)
            $array[$i + 1] = 1;
    }
    return $array;

    
    
 }   
echo "New array with maximum values: ";
print_r(test([ 1, 5, 7  ])). "<br>";



?>


