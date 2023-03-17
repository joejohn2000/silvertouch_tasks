
<?php
function test($array)
{ 
   $cnt3 = false;

   for ($i = 0; $i < sizeof($array); $i++)
        {
            if ($cnt3 && $array[$i] == 5) 
                return true;
            if ($array[$i] == 3)
                $cnt3 = true;
        }
        return false;
}

   


echo var_dump(test([ 3, 5, 1, 3, 7   ])). "<br>";
echo var_dump(test([ 1, 2, 3, 4  ])). "<br>";
echo var_dump(test([ 3, 3, 5, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 2, 5, 5, 7, 8, 10 ])). "<br>";



?>