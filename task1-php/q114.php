
<?php
function test($array)
{ 
        for ($i = 0; $i < sizeof($array)-1; $i++)
        {
            if ($array[$i] == 5 or $array[$i ] == 3)
                return true;
          
            }

            return false;
 }   

   


echo var_dump(test([ 5, 5, 5, 5, 5   ])). "<br>";
echo var_dump(test([ 3, 3, 3, 3   ])). "<br>";
echo var_dump(test([ 3, 3, 3, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 1, 6, 8, 10 ])). "<br>";



?>