
<?php
function test($array)
{ 

    for ($i = 0; $i < sizeof($array) - 1; $i++)
    {
        if (($array[$i] == 3 && $array[$i + 1] == 3) || ($array[$i] == 5 && $array[$i+1] == 5)) 
        {
            return true;
        }
    }
    return false;
}

   


echo var_dump(test([ 5, 5, 5, 5, 5   ])). "<br>";
echo var_dump(test([ 1, 2, 3, 4  ])). "<br>";
echo var_dump(test([ 3, 3, 5, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 1, 5, 5, 7, 8, 10 ])). "<br>";



?>