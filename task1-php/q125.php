<?php
function test($array)
    { 
      $size = 0;
      
       for ($i = 0; $i < sizeof($array); $i++)
            {
                if ($array[$i] == 5)
                {
                    $size = $i;
                    break;
                }
            }
         $arr = [$size];

            for ($j = 0; $j < $size; $j++)
            {
                $arr[$j] = $array[$j];
            }
         return $arr;
            }   


      print_r(test([1, 2, 3, 5, 7 ] )). "<br>";
?>
