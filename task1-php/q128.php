<?php
function test($array)
    { 
        $size = sizeof($array);
        $j = 0;
        $arr = array_fill (0, $size, 0);
        for ($i = 0; $i < $size;  $i++)
          {
            if ($array[$i] != 5)
               {
                 $arr[$j] = $array[$i];
                 $j++;
               }
           }
        return $arr;
    }  
    

    print_r(test([1, 2, 0, 3, 5, 7, 0, 9, 11    ] )). "<br>";
    ?>
    