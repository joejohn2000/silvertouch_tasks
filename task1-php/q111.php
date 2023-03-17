
<?php
function test($array)
{ 
        for ($i = 0; $i < sizeof($array)-1; $i++)
        {
            if ($array[$i] == 5 or $array[$i + 1] == 7)
                return true;
          
        }
        return false;
 }   

   


echo var_dump(test([ 1, 5, 6, 9, 10, 17  ])). "<br>";
echo var_dump(test([ 1, 4, 7, 9, 10, 17  ])). "<br>";
echo var_dump(test([ 1, 1, 2, 9, 10, 17 ])). "<br>";



?>