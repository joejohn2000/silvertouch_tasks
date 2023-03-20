<?php
function test($array)
    { 
        $j = 0;
        for ($i = 0; $i < sizeof($array); $i++)
            {
                if ($array[$i] % 2 == 0)
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $temp;
                    $j++;
                }
            }
            return $array;
    }  
    
    

    print_r(test([1, 2, 5, 3, 5, 4, 6, 9, 11    ] )). "<br>";
    ?>
    