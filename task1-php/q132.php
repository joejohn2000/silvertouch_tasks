<?php
function test($array)
    { 
        $beg = Average($array, 0, sizeof($array) / 2);
        $end = Average($array, sizeof($array) / 2, sizeof($array));
        return $beg > $end ? $beg : $end;
    }  
    
function Average($num, $start, $end)
        {
          $sum = 0;
          for ($i = $start; $i < $end; $i++)
                $sum += $num[$i];
            return $sum / (sizeof($num) / 2);
        }    
    
echo test([1, 2, 3, 4, 6, 8]). "<br>";
echo test([15, 2, 3, 4, 15, 11]). "<br>";
?>