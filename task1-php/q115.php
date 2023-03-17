
<?php
function test($array)
{ 

    $cnt3=false;
    $cnt5=false;

    for ($i = 0; $i < sizeof($array); $i++)
        {
        if ($array[$i] == 3)
        {
            $cnt3 = true;
        }
        if ($array[$i] == 5) 
        {
            $cnt5  = true;
        }
        if ($cnt3 && $cnt5) 
            return false;
        }
       return true;
} 

   


echo var_dump(test([ 5, 5, 5, 5, 5   ])). "<br>";
echo var_dump(test([ 3, 3, 3, 3   ])). "<br>";
echo var_dump(test([ 3, 3, 3, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 1, 6, 8, 10 ])). "<br>";



?>