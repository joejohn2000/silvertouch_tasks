<?php
function test($array, $count)
    { 
      $arr = [$count];
        $j = 0;

        for ($i = 0; $j < $count; $i++)
            {
                if ($array[$i] % 2 != 0)
                {
                    $arr[$j] = $array[$i];
                    $j++;
                }
            }

            return $arr;
    }
    print_r(test([1,2,3,5,7,9,10   ],3 )). "<br>";
    ?>
