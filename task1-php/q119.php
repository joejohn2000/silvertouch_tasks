
<?php
function test($array)
{ 
   $odd = 0;
   $even = 0;

   for ($i = 0; $i < sizeof($array); $i++)
         {
            if ($odd < 2 && $even < 2)
             {
               if ($array[$i] % 2 == 0)
                {
                   $even++;
                   $odd = 0;
                 }
               else
                {
                   $odd++;
                   $even = 0;
                }
           }
         }
    return $odd == 2 || $even == 2;
}   
   


echo var_dump(test([ 3, 5, 1, 3, 7   ])). "<br>";
echo var_dump(test([ 1, 2, 3, 4  ])). "<br>";
echo var_dump(test([ 3, 3, 5, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 2, 4, 5, 6 ])). "<br>";



?>