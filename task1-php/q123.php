<?php
function test($array)
    { 
       for ($i = 0; $i <= sizeof($array) - 3; $i++)
          {
             if ($array[$i] == $array[$i + 1] - 1
                 && $array[$i] == $array[$i + 2] - 2)
               {
                  return true;
                }
          }
          return false;
      }   

     

echo var_dump(test([1, 2, 3, 5, 3, 7])). "<br>";
echo var_dump(test([3, 7, 5, 5, 3, 7])). "<br>";
echo var_dump(test([3, 7, 5, 5, 6, 7, 5])). "<br>";
?>