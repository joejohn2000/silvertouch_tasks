<?php
function test($array)
    { 
       $arr=[sizeof($array)];
       for ($i = 0; $i <= sizeof($array) - 1; $i++)
          {
             $arr[$i]=$array[($i + 1) % sizeof($array)];
          }
          return  $arr;
      }   




      print_r(test([10, 20, -30, -40, 50] )). "<br>";
?>
