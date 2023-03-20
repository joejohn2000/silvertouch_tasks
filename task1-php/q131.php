<?php
function test($array)
    { 
       for ($i = 0; $i < sizeof($array) - 1; $i++)
          {
             if ($array[$i + 1] == $array[$i] && $array[$i] == 15) return true;
          }
       return false;;
    }  
    
echo var_dump(test([5, 5, 1, 15, 15])). "<br>";
echo var_dump(test([15, 2, 3, 4, 15])). "<br>";
echo var_dump(test([3, 3, 15, 15, 5, 5])). "<br>";
echo var_dump(test([1, 5, 15, 7, 8, 15])). "<br>";
?>