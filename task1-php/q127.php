<?php
function test($array)
    { 
       $j = 0;
       for ($i = 0; $i < sizeof($array); $i++)
            {
                if ($array[$i] == 0)
                {
                    $array[$i] = $array[$j];
                    $array[$j++] = 0;
                }
            }
            return $array;
    }  
    print_r(test([1, 0, 0, 3, 5, 7, 0, 9, 11   ] )). "<br>";
    ?>
    
    