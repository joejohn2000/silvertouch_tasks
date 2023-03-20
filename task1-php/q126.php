<?php
function test($array)
    { 
      $size = 0;
      
       for ($i = 0; $i < sizeof($array); $i++)
            {
                if ($array[$i] == 5)
                {
                    $j = $i;
                    $arr = [ sizeof($array)];

                    for ($j = $i; $j < sizeof($array); $j++)
                    {
                        $arr[$i] = $array[$j];
                    }
                 return $arr;
                }
            }
       
            }   


      print_r(test([1, 2, 3, 5, 7, 9, 11  ] )). "<br>";
?>
