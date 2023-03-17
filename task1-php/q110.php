
<?php
function test($array)
{ 
        for ($i = 0; $i < sizeof($array)-1; $i++)
        {
            if ($array[$i] == 5 and $array[$i + 1] == 5)
                return true;
          
            }

            return false;
 }   

   


echo var_dump(test([ 1, 5, 6, 9, 10, 17  ])). "<br>";
echo var_dump(test([ 1, 5, 5, 9, 10, 17 ])). "<br>";
echo var_dump(test([ 1, 5, 5, 9, 10, 17, 5, 5 ])). "<br>";



?>
